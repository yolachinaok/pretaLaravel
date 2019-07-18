@extends('layouts.master')
@yield('title')
<title>PRETA - AYUDA</title>
@section('styles')
<link href="/css/style-faqs.css" rel="stylesheet">
@endsection
@section('content')
    <!-- titulo -->
    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">AYUDA</h2>
      </div>
    </div>
    <!-- grilla de preguntas -->
    <div class="contenedor">
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">DEVOLUCIONES Y CAMBIOS</p>
      </div></a>
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">MI ORDEN</p>
      </div></a>
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">ENVIOS</p>
      </div></a>
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">PRODUCTOS Y STOCK</p>
      </div></a>
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">PAGOS Y PROMOCIONES</p>
      </div></a>
      <a href="/faqs" class="caja-pregunta"> <div>
        <p class="categoria-pregunta">MAS PREGUNTAS</p>
      </div></a>
    </div>
@endsection
