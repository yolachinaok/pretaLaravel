@extends('layouts.master')
@section('styles')
<link href="/css/style-login.css" rel="stylesheet">
@endsection

@section('content')

  <div class="contenedor">

    <div class="contenedor-formulario">
      <div class="borde-titulo">
        <div class="contenedor-titulo margen-izq">
          <h2 class="titulo">RESETEAR CONTRASEÑA</h2>
        </div>
      </div>



<div class="padding-eje-y">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h4>Un codigo se ha enviado a {{$email}}</h4> <br>

    <form class="margen-izq" method="POST" action="">
        @csrf
        <div class="email-cont">
            <label for="password" class="label-desktop">Nueva contraseña</label>
            @error('password')
                   <span>
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
            <br>
            <input type="password" class="input-blanco" name="password" value="">
            <span class="separador"></span>
            <label for="repeatpassword" class="label-desktop">Repetir contraseña</label>
            @error('repeatpassword')
                   <span>
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror<br>
            <input type="password" class="input-blanco" name="repeatpassword" value="">
            <span class="separador"></span>
            <label class="label-desktop" for="codigo">Código de seguridad</label>
            @error('codigo')
                   <span>
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror<br>
            <input class="input-blanco" type="text" name="codigo" value="">

            </div>

        <div class="">
          <input type="hidden" name="userid" value="{{$id}}">
            <div class=""> <br>
                <button type="submit" class="boton-gris">
                    Cambiar contraseña
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
@endsection
