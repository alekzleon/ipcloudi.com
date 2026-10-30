@extends('layouts.article')
@section('content')
<p>Tu dirección IP puede cambiar porque el proveedor utiliza asignaciones dinámicas, porque te conectas a otra red o porque cambia el punto de salida de una VPN. Es un comportamiento habitual y no significa, por sí solo, que alguien haya entrado a tu conexión. Lo primero es distinguir si cambió la dirección local de tu dispositivo o la IP que observan los servicios de Internet.</p>
<p>Tampoco existe una frecuencia universal de cambio. Algunas conexiones conservan su dirección durante periodos prolongados; otras cambian al reconectarse o pasar de una red a otra. Aquí encontrarás una forma de interpretar esos cambios y reconocer señales que podrían relacionarse con CGNAT.</p>

<h2>¿Es normal que mi dirección IP cambie?</h2>
<p>Sí, puede ser normal. Tu conexión recibe direcciones bajo las condiciones del proveedor y de tu red. Una laptop puede tener una dirección privada en casa y otra en la oficina. Mientras tanto, el router doméstico puede mantener o cambiar su dirección WAN independientemente de la dirección de esa laptop.</p>
<p>Antes de comparar resultados, revisa <a href="/ip-publica-vs-ip-privada">la diferencia entre una IP pública y privada</a>. Anotar dos direcciones de tipos distintos suele parecer un cambio inexplicable cuando, en realidad, ambas están funcionando al mismo tiempo.</p>

<h2>¿Qué es una IP dinámica?</h2>
<p>Es una dirección que se asigna mediante un mecanismo que permite renovarla o sustituirla. En redes locales es frecuente utilizar DHCP: el router entrega una configuración por un tiempo determinado y el equipo solicita renovarla. La renovación puede conservar la misma dirección; «dinámica» no significa que necesariamente cambie en cada conexión.</p>
<p>Los proveedores también utilizan mecanismos de asignación y administración para sus clientes. No conviene deducir el comportamiento de tu servicio a partir de lo que ocurre en otro hogar, incluso si ambos usan la misma compañía. El contrato y la infraestructura pueden ser diferentes.</p>

<h2>¿Qué es una IP estática?</h2>
<p>Una IP estática se mantiene asignada según una configuración o un servicio acordado. Puede resultar útil para conexiones remotas, listas de acceso o servicios que necesitan una dirección predecible. Debe distinguirse de una dirección dinámica que simplemente no ha cambiado durante varias semanas.</p>
<p>Una IP estable no mejora automáticamente la velocidad ni garantiza disponibilidad. Si se utiliza para publicar un servicio, siguen siendo necesarios mantenimiento, autenticación y protección. Tampoco convierte una dirección privada en pública: la estabilidad y el alcance son propiedades diferentes.</p>

<h2>Diferencias entre IP dinámica y estática</h2>
<div class="table-scroll"><table>
<caption>Qué cambia al elegir una dirección dinámica o estática</caption>
<thead><tr><th scope="col">Aspecto</th><th scope="col">Dinámica</th><th scope="col">Estática</th></tr></thead>
<tbody>
<tr><th scope="row">Estabilidad</th><td>Puede conservarse o cambiar al renovarse.</td><td>Se mantiene bajo las condiciones de configuración o contrato.</td></tr>
<tr><th scope="row">Administración</th><td>Habitualmente automática.</td><td>Requiere asignación o configuración prevista.</td></tr>
<tr><th scope="row">Uso común</th><td>Navegación y dispositivos de redes domésticas.</td><td>Acceso remoto, servicios y reglas de acceso estables.</td></tr>
<tr><th scope="row">Costo</th><td>Depende del plan contratado.</td><td>Puede requerir otro plan o un cargo; hay que consultarlo.</td></tr>
<tr><th scope="row">Seguridad</th><td>No sustituye controles de seguridad.</td><td>Tampoco sustituye controles de seguridad.</td></tr>
</tbody></table></div>

<h2>Principales razones por las que cambia tu IP</h2>
<h3>Reconexión o reinicio del router</h3>
<p>Al restablecer la conexión, el proveedor puede conservar la asignación anterior o entregar otra. Apagar el router unos minutos no garantiza un resultado concreto. Evita reiniciarlo repetidamente para forzar un cambio: interrumpirías llamadas, descargas y otros dispositivos sin asegurar que la dirección cambie.</p>
<h3>Renovación de asignaciones</h3>
<p>La red puede renovar una configuración vigente o reasignar direcciones por sus propias políticas. Dentro de casa también puede cambiar la IP privada de un equipo. Si una impresora deja de responder tras ese cambio, revisa su configuración local antes de atribuirlo a la IP pública.</p>
<h3>Cambio de Wi-Fi o conexión móvil</h3>
<p>Pasar del Wi-Fi de casa a datos móviles cambia el camino hacia Internet. También puede cambiar la salida dentro de una red móvil, según su funcionamiento. Dos redes Wi-Fi con nombres parecidos no garantizan que utilicen el mismo proveedor ni la misma salida.</p>
<h3>VPN y ajustes del proveedor</h3>
<p>Una VPN puede hacer que determinados servicios observen la dirección de su punto de salida. Cambiar de servidor VPN puede modificar esa dirección. El proveedor también puede reorganizar su red por mantenimiento o gestión. La herramienta muestra el resultado de una consulta, no el historial completo de esas decisiones.</p>

<h2>¿Cada cuánto tiempo cambia una IP?</h2>
<p>No existe un intervalo válido para todas las conexiones. La duración de una asignación no equivale necesariamente al tiempo hasta el siguiente cambio: una renovación puede entregar la misma dirección. Si necesitas confirmar un comportamiento, observa tu propia conexión y consulta las condiciones del servicio.</p>
<p>Para llevar un registro sencillo, anota fecha, hora, IP visible y red utilizada. Incluye si tenías VPN activa. Esto permite comparar situaciones equivalentes y aporta información útil al soporte, sin asumir que una coincidencia es una garantía de permanencia.</p>

<h2>¿Qué es CGNAT y cómo afecta tu conexión?</h2>
<p>CGNAT, o Carrier-Grade NAT, es una traducción de direcciones administrada por el operador. Permite que varias conexiones de clientes compartan una IPv4 pública. Puede existir además del NAT del router de casa: primero se traduce la conexión local y después interviene la infraestructura del proveedor.</p>
<p>El bloque <code>100.64.0.0/10</code>, desde 100.64.0.0 hasta 100.127.255.255, está reservado para espacio compartido según <a href="https://www.rfc-editor.org/info/rfc6598/" rel="external">RFC 6598</a>. Es distinto de los rangos privados de RFC 1918 y no equivale a una dirección pública asignada exclusivamente a tu router.</p>
<p>Para navegar o ver contenido, esa traducción suele ser transparente. Puede complicar conexiones entrantes, publicación de servidores o ciertos accesos remotos. Tener CGNAT no prueba una falla ni determina por sí solo la velocidad contratada.</p>

<h2>Cómo identificar si podrías estar utilizando CGNAT</h2>
<ol>
<li>Conecta tu equipo al router que quieres revisar y comprueba si hay una VPN o un proxy activo.</li>
<li>Abre la administración del router utilizando las instrucciones de su fabricante o proveedor. Consulta el apartado Internet o WAN sin modificarlo.</li>
<li>Identifica específicamente su dirección IPv4 WAN; no la confundas con la dirección LAN del router.</li>
<li>En el mismo momento y desde esa red, consulta <a href="/">la IP visible en IPCloudi</a>.</li>
<li>Compara direcciones de la misma familia. No compares una IPv4 WAN con una IPv6 observada externamente.</li>
<li>Si difieren, anota el resultado y pregunta al proveedor si utiliza CGNAT y qué alternativas ofrece.</li>
</ol>
<p>Una WAN dentro de 100.64.0.0/10 es una señal compatible con espacio compartido. Una diferencia entre WAN y la IP externa no prueba por sí sola CGNAT: puede deberse a doble NAT, VPN, proxies u otras configuraciones. Por ejemplo, dos routers conectados en cadena pueden introducir otra traducción dentro de tu propia instalación.</p>

<h2>¿Es posible solicitar una IP fija a mi proveedor?</h2>
<p>Depende del proveedor y del contrato. Pregunta si ofrece una IPv4 pública, si es exclusiva, si es estática y si permite conexiones entrantes. Son condiciones diferentes. Solicita también información sobre costo, restricciones y soporte antes de contratar.</p>
<p>Si el objetivo es entrar a un equipo de casa, describe esa necesidad en lugar de pedir únicamente «una IP mejor». Puede haber otras soluciones de acceso remoto. Un servicio de DNS dinámico actualiza un nombre cuando cambia la IP, pero no elimina CGNAT ni abre puertos bloqueados.</p>

<h2>¿Qué ocurre si mi IP cambia mientras utilizo Internet?</h2>
<p>Algunas sesiones pueden reconectarse automáticamente; otras pueden interrumpirse. Una conexión remota, una llamada o una descarga puede requerir restablecer comunicación. Los servicios que autorizan acceso mediante una IP específica pueden dejar de reconocer la dirección nueva.</p>
<p>Para un servidor, el cambio puede volver incorrecta la dirección publicada. Conviene preparar un método de acceso compatible con el servicio contratado y comprobar las reglas de seguridad. Para navegación cotidiana, un cambio aislado no implica que necesites una IP fija.</p>

<h2>Preguntas frecuentes</h2>
<h3>¿Reiniciar el módem siempre cambia mi IP?</h3><p>No. El proveedor puede volver a asignar la misma. Reiniciarlo tampoco garantiza salir de CGNAT.</p>
<h3>¿Cambiar de Wi-Fi cambia mi IP?</h3><p>Puede cambiar la dirección local y la salida pública. Dos puntos de acceso de una misma red pueden compartir esa salida.</p>
<h3>¿Una VPN cambia todas las direcciones del equipo?</h3><p>No necesariamente. Modifica el recorrido del tráfico que pasa por ella; la IP local puede permanecer igual y algunas aplicaciones pueden usar otra ruta.</p>
<h3>¿Necesito una IP fija para trabajar desde casa?</h3><p>No siempre. Depende de los requisitos de acceso de tu organización, no de trabajar remotamente en sí mismo.</p>
<h3>¿CGNAT significa que alguien comparte mi Wi-Fi?</h3><p>No. Compartir una salida pública del proveedor no equivale a estar dentro de tu red doméstica.</p>
<h3>¿Un cambio de IP significa que me hackearon?</h3><p>No por sí solo. Si hay otros indicios, revisa dispositivos y cuentas. Consulta <a href="/que-pueden-saber-con-mi-ip">los límites de la información asociada a una IP</a>.</p>

<h2>Conclusión</h2>
<p>Interpreta los cambios comparando la misma red, la misma familia de direcciones y el mismo uso de VPN. Después, confirma con tu proveedor cualquier condición que necesites para acceso remoto. Puedes <a href="/">consultar tu IP visible en IPCloudi</a> y usar la <a href="/ip-lookup">guía de consultas IP</a> para entender el resultado, sin atribuir a un cambio más significado del que tiene.</p>
@endsection
