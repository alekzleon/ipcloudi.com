@extends('layouts.info')
@section('title', 'Acerca de IPCloudi')
@section('description', 'Conoce el propósito y las limitaciones de la herramienta de información de redes IPCloudi.')
@section('content')
<p>IPCloudi ayuda a consultar la IP pública de una conexión y entender datos de redes mediante guías en español. Está dirigido a personas que quieren conocer mejor su conexión y realizar comprobaciones básicas.</p>
<h2 class="text-xl font-bold">Cómo funciona</h2>
<p>El servidor detecta la dirección de conexión y consulta api.ipquery.io para obtener información complementaria. La ubicación es aproximada; las señales de VPN, proxy o TOR no son una certificación de seguridad. Los campos ausentes se muestran como no disponibles.</p>
<p>Explora la <a class="text-pink-400" href="/what-is-my-ip">guía de direcciones IP</a> y la <a class="text-pink-400" href="/ip-lookup">guía de consultas IP</a>. Para soporte o correcciones utiliza nuestro <a class="text-pink-400" href="/contact">contacto</a>.</p>
@endsection
