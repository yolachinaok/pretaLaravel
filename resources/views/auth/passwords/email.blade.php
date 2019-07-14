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

    <form class="margen-izq" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="email-cont">
            <label for="email" class="label-desktop">¿Con qué email estas registrado?</label> <br>
            <input id="email" type="email" class="input-blanco @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4"> <br>
                <button type="submit" class="boton-gris">
                    Enviar link para resetear
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
@endsection
