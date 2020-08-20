@extends('layouts.app')

@section('content')

<div class="container">
<br>
<h1 class="text-center">Protocolos de Bioseguridad de Limpro Colombia</h1>
<br>
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="{{ asset('archivos/protocolos_imagen.pdf') }}" allowfullscreen></iframe>
</div>
<br>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ asset('archivos/protocolos.pdf') }}" allowfullscreen></iframe>
</div>
</div>
<br>
@endsection

@section('title')
    Protocolos de Bioseguridad Limpro Colombia Limpieza Profesional
@endsection