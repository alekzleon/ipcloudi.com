import { readFileSync } from 'node:fs';
import vm from 'node:vm';
import test from 'node:test';
import assert from 'node:assert/strict';

const source = [...readFileSync('resources/views/home.blade.php', 'utf8').matchAll(/<script>([\s\S]*?)<\/script>/g)].at(-1)[1];
const tick = () => new Promise(resolve => setImmediate(resolve));
function start(fetch) {
    const nodes = new Map();
    const document = { getElementById(id) {
        if (!nodes.has(id)) nodes.set(id, {
            textContent: '', innerHTML: '', handlers: {},
            classList: { add() {}, remove() {} },
            addEventListener(name, handler) { this.handlers[name] = handler; },
        });
        return nodes.get(id);
    } };
    vm.runInNewContext(source, { document, fetch, AbortSignal, setTimeout, navigator: {} });
    return nodes;
}

test('success escapes provider values and distinguishes unknown, false and true', async () => {
    const nodes = start(async () => ({ ok: true, json: async () => ({
        ip: '8.8.8.8', isp: { isp: '<img src=x onerror=alert(1)>' },
        risk: { is_vpn: false, is_tor: true, is_proxy: 'false' },
    }) }));
    await tick();
    const details = nodes.get('details').innerHTML;
    assert.match(details, /No concluyente/);
    assert.match(details, />\s*Sí\s*</);
    assert.match(details, />\s*No\s*</);
    assert.match(details, /&lt;img/);
    assert.doesNotMatch(details, /<img src=x/);
    assert.equal(nodes.get('header-location').textContent, 'No disponible');
    assert.ok(nodes.get('copyBtn').handlers.click);
});

test('provider errors offer a retry and retry recovers', async () => {
    let attempts = 0;
    const nodes = start(async () => {
        if (attempts++ === 0) throw new Error('offline');
        return { ok: true, json: async () => ({ ip: '1.1.1.1' }) };
    });
    await tick();
    assert.match(nodes.get('ip-box').innerHTML, /Reintentar/);
    await nodes.get('retry-ip').handlers.click();
    assert.match(nodes.get('ip-box').innerHTML, /1\.1\.1\.1/);
    assert.equal(attempts, 2);
});

test('rate limit and invalid data clear loading state', async () => {
    for (const response of [{ ok: false }, { ok: true, json: async () => ({}) }]) {
        const nodes = start(async () => response);
        await tick();
        assert.match(nodes.get('ip-box').innerHTML, /Reintentar/);
        assert.equal(nodes.get('header-location').textContent, 'Sin datos');
    }
});
