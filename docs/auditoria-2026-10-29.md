# Implementación de la auditoría IPCloudi — 29 de octubre de 2026

## Alcance y resultado

Se aplicaron las correcciones locales P0/P1 viables de la auditoría proporcionada. Stack comprobado: PHP 8.3.20, Laravel 13.2.0, Blade y Vite 8.0.3. No se desplegó ni se modificó la solicitud de AdSense. Las herramientas futuras y comprobaciones de infraestructura siguen pendientes.

El repositorio ya tenía numerosos cambios de permisos sin diferencias textuales. Se conservaron; no se hizo reset, commit ni migración. No se creó una rama; los cambios están en el checkout actual.

## Cambios

- `public/ads.txt`: publisher `pub-9068723123011153`, coincidente con el script preexistente y el documento. Falta cotejo directo con la cuenta.
- `resources/views/partials/adsense.blade.php`: una inclusión del script por página pública.
- `resources/views/home.blade.php`: español, retiro de placeholders y bloques publicitarios vacíos, corrección del HTML malformado del bloque superior, contenido independiente de la API, tiempo límite, reintento, estados desconocidos, mensajes accesibles y valores externos escapados. Se retiraron las imágenes promocionales alrededor de la herramienta; los archivos originales siguen disponibles.
- `resources/views/layouts/info.blade.php`, `partials/footer.blade.php`, páginas legales, contacto y acerca de: navegación común, viewport, títulos, descripciones, canonical y textos ampliados con prácticas observables. No se inventó una razón social, domicilio, jurisdicción ni plazo de retención.
- Guías existentes: contenido conservado, canonical, enlaces legales, revisión técnica y promoción identificada como externa.
- `public/robots.txt`, `public/sitemap.xml`: sitemap declarado, API excluida del rastreo, página acerca de incluida. Las URLs canónicas son las de producción y excluyen parámetros.
- `routes/web.php`, `app/Http/Controllers/IpController.php`: detección mediante Request y proxies confiables, validación de IP pública antes de consultar proveedor fijo, límite de 30 solicitudes/minuto, conexión máxima de 3 segundos y petición de 8 segundos, manejo de errores 503 y datos inválidos, respuestas privadas sin almacenamiento HTTP. Se retiró la caché persistente de consultas. Se conservan rutas myip/V2/V3 pero ya no exponen cabeceras de diagnóstico; no se inventa IPv4 para conexiones IPv6.
- `bootstrap/app.php`, `.env.example`: `TRUSTED_PROXIES` permite configurar IPs/CIDRs reales del proxy; por defecto no se confían cabeceras arbitrarias. Configurar y probar en hosting para evitar detectar la IP del proxy.
- `.gitignore`: respaldo local excluido. El volumen vuelve a crear archivos AppleDouble al escribir; limpiar `._*` antes de probar o empaquetar.

## Mapa de datos observado

- La IP del visitante se envía a `api.ipquery.io` por el backend para consultar datos de red.
- El resultado no se persiste ni se comparte entre visitantes en la aplicación.
- Laravel conserva la configuración de sesiones existente. La sesión puede contener IP y agente de usuario según el driver efectivo.
- Analytics `G-Z5NTGVNK06` permanece en la portada; AdSense utiliza el ID preexistente en las páginas públicas.
- Las guías y portada aún referencian el favicon externo de cloudi.mx; ese host puede recibir la solicitud del navegador.
- Logs de aplicación, servidor, CDN, correo y condiciones de terceros requieren revisión del operador. No se conocen retenciones efectivas de producción.

## Validación ejecutada

- `php artisan route:list --except-vendor`: 11 rutas públicas/de consulta; sin rutas duplicadas.
- `php artisan view:cache` y `php artisan view:clear`: compilación Blade correcta, sin dejar caché de vistas local.
- `php artisan test`: 10 pruebas, 135 assertions, todas correctas. Cubren páginas y canonical sin parámetros, un script y H1 por página, 404 real, IPv6, cabeceras falsas, bloqueo de IP privada, aislamiento entre visitantes, proveedor inválido/error/timeout y límite de tasa.
- `node --test tests/js/ip-ui.test.mjs`: 3 pruebas correctas. Cubren escape de contenido externo, true/false/desconocido, fallo, reintento y respuestas inválidas. Se usa un DOM simulado; no equivale a pruebas visuales en navegador.
- `npm run build`: correcto. Advertencia informativa por datos Browserslist antiguos; no se actualizaron dependencias ajenas al alcance.
- HTTP local del servidor existente en `127.0.0.1:8000`: portada 200; `/ads.txt` 200, `Content-Type: text/plain; charset=UTF-8`, contenido esperado.
- No se midió Lighthouse, Core Web Vitals ni cookies reales en navegador. No se afirma ningún puntaje ni validación visual móvil.

## Antes de publicar

1. Cotejar publisher con la cuenta AdSense. Mantener la revisión existente.
2. Confirmar razón social/titular, domicilio cuando proceda, proveedores, cookies, transferencias y plazos reales; completar la política con información del operador y revisión jurídica aplicable. El texto actual no acredita cumplimiento legal.
3. Configurar una CMP certificada donde corresponda al tráfico y anuncios; verificar consentimiento real de Analytics/AdSense en navegador. No se implementó un banner casero como sustituto de una CMP.
4. Configurar los proxies reales, comprobar visitante correcto detrás de CDN y bloquear acceso directo al origen según arquitectura. No usar `TRUSTED_PROXIES=*`.
5. Verificar cuotas/condiciones de ipquery.io y presupuesto operativo. No se enviaron consultas reales al proveedor durante las pruebas automatizadas.
6. Respaldar base de datos y `.env` de producción con el mecanismo seguro del hosting; no se copiaron secretos al repositorio. Revisar `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://ipcloudi.com`, HTTPS, document root `public/`, permisos y disponibilidad de tablas de caché para rate limiting.
7. Probar HTTP/HTTPS y www/no-www, SSL, 404 y cabeceras en staging/producción; medir móvil/escritorio con Lighthouse, revisar teclado, red lenta y cookies.
8. Publicar con el proceso del hosting y comprobar `/`, `/ads.txt`, `/robots.txt`, `/sitemap.xml`, legales y guías. Confirmar script único y `ads.txt` text/plain sin autenticación.
9. Search Console: sitemap, inspección URL, indexación y canonical. AdSense: seguimiento de revisión y rastreo de ads.txt.
10. Backlog futuro no implementado: consulta arbitraria, calculadora CIDR, DNS Lookup. La auditoría los presenta como ampliaciones; requieren alcance propio y controles específicos. No se habilitó escaneo abierto.

## Respaldo y reversión local

Antes de editar se guardó `.audit-backups/before-2026-10-29.tar.gz` (sin `.env` ni base de datos). Para revertir únicamente esta intervención, revisar primero los cambios posteriores y restaurar ese archivo desde la raíz del proyecto:

```bash
tar -xzf .audit-backups/before-2026-10-29.tar.gz
```

Ese respaldo restaura rutas, vistas, robots, sitemap, bootstrap y `.env.example`. Los archivos nuevos deben retirarse de forma selectiva: controlador IpController, ads.txt, layouts/info, parciales, página about, pruebas AuditTest y carpeta tests/js. Revertir también solo las líneas agregadas a `.gitignore`, y reconstruir assets con `npm run build`. No utilizar reset global porque existían cambios anteriores. Para producción, conservar la release anterior completa y sus assets y volver a apuntar a ella mediante el mecanismo del hosting.

## Referencias consultadas

- [Laravel 13: Requests y proxies confiables](https://laravel.com/docs/13.x/requests)
- [Google: problemas de ads.txt](https://support.google.com/adsense/answer/12171244?hl=es)
- [Google: requisitos de gestión del consentimiento](https://support.google.com/adsense/answer/13554116?hl=es)

## Corrección de consulta en localhost

La validación nueva rechazaba loopback con 422. En `APP_ENV=local`, y únicamente para `127.0.0.1`/`::1`, se consulta el endpoint de autodetección `https://api.ipquery.io/?format=json`. Se muestra un aviso de IP pública de salida del servidor de desarrollo. En producción se mantiene la detección del visitante y el rechazo de direcciones no públicas. La comparación de IPv6 usa su representación binaria para aceptar formas equivalentes.

Verificado con una llamada real a `/api/ip` en localhost: devuelve datos de IP, proveedor y ubicación con `lookup_context=local_egress`. Suite actual: 12 pruebas PHP, 141 assertions; 3 pruebas JavaScript correctas.
