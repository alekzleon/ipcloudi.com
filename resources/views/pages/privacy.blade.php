@extends('layouts.info')
@section('title', 'Política de privacidad')
@section('description', 'Cómo se procesan la IP, las consultas de red, las cookies y las solicitudes de contacto en IPCloudi.')
@section('content')
<p>Última actualización: 29 de octubre de 2026.</p>
<h2 class="text-xl font-bold">Datos necesarios para la consulta</h2>
<p>IPCloudi recibe la dirección IP de tu conexión para mostrar información de red. Al consultar la herramienta, el servidor envía esa IP a api.ipquery.io para obtener ubicación aproximada, proveedor y señales de red. Ese proveedor recibe la IP consultada y procesa la solicitud bajo sus propias condiciones.</p>
<p>La aplicación no guarda los resultados de consultas IP en una base de datos ni en una caché compartida. Esto no implica ausencia de registros: el servidor, el alojamiento o una red de distribución pueden registrar IP, fecha, URL y datos técnicos para operar y proteger el servicio. No afirmamos un plazo de retención de infraestructura que no hemos verificado.</p>
<h2 class="text-xl font-bold">Cookies y servicios externos</h2>
<p>Laravel puede generar cookies técnicas de sesión y protección de solicitudes; según el almacenamiento configurado, la sesión puede registrar IP y agente de usuario. La portada incluye Google Analytics para medición de uso y las páginas incluyen el script de Google AdSense para publicidad. Estos servicios pueden tratar identificadores, información del navegador, actividad y cookies según su configuración y las preferencias aplicables.</p>
<p>Consulta <a class="text-pink-400" href="https://policies.google.com/technologies/partner-sites?hl=es" rel="external">cómo usa Google la información de sitios que emplean sus servicios</a>. Puedes administrar cookies en tu navegador. El bloqueo de cookies no impide leer nuestras guías.</p>
<h2 class="text-xl font-bold">Contacto y solicitudes sobre datos</h2>
<p>Si escribes a contacto@cloudi.mx, recibiremos tu dirección de correo y el contenido del mensaje para atenderte. Evita enviar contraseñas o información sensible. Puedes utilizar ese correo para solicitar información sobre el tratamiento, correcciones o eliminación de datos que podamos identificar y que corresponda atender.</p>
<h2 class="text-xl font-bold">Proveedores y alcance</h2>
<p>Los servicios de IP, alojamiento, correo, medición y publicidad pueden procesar datos fuera de tu país. Sus condiciones y la configuración del servicio determinan su tratamiento y retención. Para aclarar proveedores, conservación o el responsable del proyecto, escribe al canal de contacto.</p>
@endsection
