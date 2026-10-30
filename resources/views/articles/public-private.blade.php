@extends('layouts.article')
@section('intro')
<p>La diferencia entre una IP pública y privada está en dónde se utiliza: la pública identifica una conexión accesible mediante el direccionamiento de Internet; la privada organiza dispositivos dentro de una red local. En casa puedes tener una IP privada distinta para tu celular y tu computadora, aunque ambos salgan a Internet con la misma IP pública. Ninguna de las dos direcciones equivale, por sí sola, a tu identidad personal.</p>
@endsection
@section('content')

<p>Entender esta diferencia ayuda cuando configuras una impresora, reportas un problema de conexión o comparas lo que aparece en tu equipo con una herramienta en línea. Antes de cambiar ajustes, identifica qué dirección estás viendo y en qué red tiene sentido.</p>

<h2>¿Qué es una dirección IP?</h2>
<p>Una dirección IP permite identificar un punto de comunicación dentro de una red. Los equipos la utilizan para enviar y recibir paquetes. Una interfaz puede tener varias direcciones y un mismo equipo puede conectarse por Wi-Fi, Ethernet o una VPN al mismo tiempo. Por eso, preguntar «cuál es mi IP» puede tener varias respuestas correctas.</p>
<p>IPv4 se escribe con cuatro números separados por puntos; IPv6 utiliza grupos hexadecimales separados por dos puntos. Esta guía se concentra en IPv4. Si necesitas repasar los conceptos básicos, consulta <a href="/what-is-my-ip">qué es una dirección IP y cómo funciona</a>.</p>

<h2>¿Qué es una IP pública?</h2>
<p>Una IP pública pertenece al espacio de direcciones destinado a la comunicación en Internet. En una conexión doméstica, el proveedor puede asignar una al router; también puede utilizar una infraestructura compartida antes de llegar a Internet. Una página externa observa la dirección desde la que le llega la solicitud, que puede corresponder a tu conexión, a una VPN o a un intermediario.</p>
<p>Varios dispositivos pueden compartir esa dirección visible. Por ejemplo, dos celulares conectados al mismo router pueden abrir la misma página y mostrar una IP pública idéntica, aunque tengan direcciones locales diferentes. Compartir una IP no significa compartir cuentas, archivos ni historial del navegador.</p>

<h2>¿Qué es una IP privada?</h2>
<p>Una IP privada se usa dentro de redes locales, como una casa, una oficina o una empresa. Habitualmente el router asigna estas direcciones mediante DHCP, aunque un administrador puede establecerlas de otra manera. Su alcance permite identificar a los dispositivos dentro de esa red, sin exigir una dirección pública individual para cada uno.</p>
<p>Dos hogares distintos pueden usar <code>192.168.1.20</code> para dispositivos diferentes sin que exista un conflicto entre ellos. Dentro de una misma red, en cambio, asignar esa dirección simultáneamente a dos equipos puede causar problemas. La palabra «privada» describe el direccionamiento; no asegura que el dispositivo esté protegido.</p>

<h2>Principales diferencias entre IP pública y privada</h2>
<div class="table-scroll"><table>
<caption>Comparación del direccionamiento IPv4 público y privado</caption>
<thead><tr><th scope="col">Aspecto</th><th scope="col">IP pública</th><th scope="col">IP privada</th></tr></thead>
<tbody>
<tr><th scope="row">Función</th><td>Identificar una conexión en Internet.</td><td>Identificar un dispositivo o interfaz en una red local.</td></tr>
<tr><th scope="row">Alcance</th><td>Direccionamiento global; el acceso depende de rutas y filtros.</td><td>Redes internas que utilizan esos rangos.</td></tr>
<tr><th scope="row">Asignación</th><td>Proveedor o administrador de la red.</td><td>Router mediante DHCP o configuración administrada.</td></tr>
<tr><th scope="row">Visibilidad en Internet</th><td>Puede observarla el servicio que recibe la conexión.</td><td>No se enruta directamente como destino público.</td></tr>
<tr><th scope="row">Ejemplos</th><td>203.0.113.10, solo como ejemplo reservado.</td><td>192.168.1.20 o 10.0.0.15.</td></tr>
<tr><th scope="row">Usos habituales</th><td>Salida a Internet y servicios públicos.</td><td>Impresoras, equipos y servicios internos.</td></tr>
</tbody></table></div>

<h2>Ejemplos de direcciones IP públicas y privadas</h2>
<p>Los rangos privados IPv4 definidos en <a href="https://www.rfc-editor.org/info/rfc1918/" rel="external">RFC 1918</a> son los siguientes:</p>
<ul>
<li><code>10.0.0.0/8</code>: desde 10.0.0.0 hasta 10.255.255.255.</li>
<li><code>172.16.0.0/12</code>: desde 172.16.0.0 hasta 172.31.255.255.</li>
<li><code>192.168.0.0/16</code>: desde 192.168.0.0 hasta 192.168.255.255.</li>
</ul>
<p>No todas las direcciones que empiezan con 172 son privadas: 172.16.4.8 pertenece al rango, mientras que 172.32.4.8 queda fuera de él. Tampoco debes asumir que cualquier dirección fuera de estos tres bloques es pública: existen rangos de documentación, enlace local y otros usos especiales.</p>
<p>Cuando representamos una IP pública con <code>203.0.113.10</code>, utilizamos una dirección reservada para documentación por <a href="https://www.rfc-editor.org/info/rfc5737/" rel="external">RFC 5737</a>. No representa a un usuario real ni debe utilizarse para probar conectividad pública. IPv6 tiene otras categorías, como direcciones globales, locales únicas y de enlace local; estos tres rangos IPv4 no se trasladan directamente a IPv6.</p>

<h2>Cómo saber cuál es mi IP pública</h2>
<ol>
<li>Conecta el dispositivo a la red que deseas comprobar.</li>
<li>Abre <a href="/">la herramienta de IPCloudi</a> y espera el resultado.</li>
<li>Identifica la IP mostrada y recuerda si tienes una VPN o un proxy activo.</li>
<li>Si comparas redes, anota también la hora y si estabas usando Wi-Fi o datos móviles.</li>
</ol>
<p>El resultado describe la salida de esa consulta. No es un inventario de todas las direcciones del equipo. La ubicación y el proveedor asociados son datos orientativos; puedes aprender a interpretarlos en la <a href="/ip-lookup">guía de IP Lookup</a>.</p>

<h2>Cómo encontrar mi IP privada</h2>
<h3>Windows</h3>
<p>Abre Configuración, entra a Red e Internet y selecciona la conexión Wi-Fi o Ethernet activa. Busca sus propiedades y el campo Dirección IPv4. Otra opción es abrir una terminal y ejecutar <code>ipconfig</code>; revisa el adaptador conectado, no uno desconectado. Microsoft describe estas opciones en su <a href="https://support.microsoft.com/en-gb/windows/experience/connectivity-networking/essential-network-settings-and-tasks-in-windows" rel="external">guía de configuración de red</a>.</p>
<h3>macOS</h3>
<p>En el menú Apple abre Configuración del Sistema, después Red, el servicio activo y Detalles. En TCP/IP encontrarás la configuración de direcciones y la del router. Los nombres pueden cambiar según la versión. Consulta la <a href="https://support.apple.com/es-mx/guide/mac-help/mh141292/mac" rel="external">ruta de configuración TCP/IP de Apple</a>. No necesitas modificar valores para consultarlos.</p>
<h3>Android</h3>
<p>Abre Configuración y busca Internet, Wi-Fi o Conexiones. Selecciona la red conectada y abre sus detalles; algunos fabricantes muestran la IP dentro de opciones avanzadas. Busca «dirección IP» si la ruta es distinta. No confundas este campo con la dirección MAC. En datos móviles no habrá necesariamente una red Wi-Fi local que revisar.</p>
<h3>iPhone</h3>
<p>Abre Configuración, toca Wi-Fi y después el botón de información junto a la red conectada. En Dirección IPv4 puedes consultar la dirección IP y el router. Según la configuración también aparecerán direcciones IPv6. Evita cambiar de Automático a Manual solo para averiguar tu IP: podrías interrumpir la conexión.</p>

<h2>¿Puede cambiar mi IP pública o privada?</h2>
<p>Sí. El router puede entregar otra dirección local cuando renueva asignaciones o el dispositivo cambia de red. El proveedor también puede modificar la dirección pública según su servicio. Una reserva DHCP puede mantener una dirección local para un equipo, pero no equivale a contratar una IP pública fija.</p>
<p>Reiniciar el módem no garantiza un cambio. Si necesitas acceso remoto estable, primero revisa <a href="/por-que-cambia-mi-ip">las diferencias entre IP dinámica, estática y CGNAT</a> antes de contratar servicios o abrir puertos.</p>

<h2>¿Una IP privada puede utilizarse en Internet?</h2>
<p>Puede usarse en el dispositivo mientras este navega, pero no como dirección pública enrutable directamente. En una red doméstica IPv4, NAT permite al router traducir conexiones entre direcciones locales y una dirección de salida. El router conserva la información necesaria para devolver cada respuesta al equipo correcto.</p>
<p>Esto no significa que puedas publicar un servidor con solo compartir su dirección privada. La accesibilidad también depende de firewall, configuración del router y posibles traducciones del proveedor. No abras puertos sin entender qué servicio expones.</p>

<h2>Preguntas frecuentes</h2>
<div class="guide-faq"><h3>¿Una IP privada es más segura?</h3><p>No garantiza seguridad. Reduce la exposición directa habitual, pero siguen importando las actualizaciones, contraseñas, permisos y reglas de acceso.</p></div>
<div class="guide-faq"><h3>¿Por qué todos mis dispositivos muestran la misma IP pública?</h3><p>Normalmente comparten la salida del router. También puede existir una salida compartida por el proveedor.</p></div>
<div class="guide-faq"><h3>¿Una IP fija siempre es pública?</h3><p>No. «Fija» describe estabilidad y «pública» describe alcance. Una dirección local puede configurarse para permanecer estable.</p></div>
<div class="guide-faq"><h3>¿La dirección del router es mi IP pública?</h3><p>El router suele tener una dirección local de administración y otra en su conexión WAN. Son interfaces y funciones distintas.</p></div>
<div class="guide-faq"><h3>¿Mi IP permite conocer mi domicilio?</h3><p>Una consulta pública normalmente ofrece una zona estimada. Revisa <a href="/que-pueden-saber-con-mi-ip">qué información puede revelar una IP</a> para conocer sus límites.</p></div>

<h2>Conclusión</h2>
<p>Consulta la IP del dispositivo para resolver asuntos locales y la IP visible en Internet para revisar la salida de tu conexión. Identificar ambas evita confusiones al pedir soporte. Puedes empezar por <a href="/">consultar tu IP pública en IPCloudi</a> y compararla con los detalles de la red activa, sin cambiar ninguna configuración.</p>
@endsection
