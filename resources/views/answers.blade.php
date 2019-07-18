@extends('layouts.master')
@yield('title')
<title>PRETA - AYUDA</title>
@section('styles')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="/css/style-preguntas.css" rel="stylesheet">
@endsection
@section('content')
    <!-- titulo -->
    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">AYUDA</h2>
      </div>
    </div>


    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          ¿Cuál es la política de cambios?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Podés realizar un cambio antes de los 30 días de recibido el producto. Tené en cuenta antes de realizar la compra que algunos productos no permiten cambios, lo cual será indicado claramente.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Cómo hago una devolución?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
            <p>Envolvé el producto.</p>
            <p>Poné tu información e indica como destinantario:</p>

                <p>Preta Devoluciones - Número de orden #</p>
                <p>Corrientes 333, Oficina 5</p>
                <p>Buenos Aires, Argentina.</p>
                <p>Envianos un mail a <a href='mailto:devoluciones@pretashop.com.ar'>devoluciones@pretashop.com.ar</a> con el número de tracking.</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Orden incorrecta o producto en mal estado
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Envianos un mail con el número de compra y tus datos a <a href="mailto:postventa@pretashop.com.ar">postventa@pretashop.com.ar</a> indicando el problema.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
          Tiempo de envío
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">Por favor tenga a consideración que una vez realizada la compra nos toma 3 días hábiles procesar el pedido para ser enviado. Luego tomará de 3 a 7 días hábiles dependiendo el lugar donde te encuentres.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          No encuentro el producto que quiero
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">Si recibiste un mail con un producto o lo viste en redes sociales y no lo encontras en nuestra tienda, envianos un mail a <a href="mailto:consultas@pretashop.com.ar">consultas@pretashop.com.ar</a> adjuntando una foto del producto.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          ¿Qué métodos de pago aceptan?
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">Podes pagar con tarjeta de crédito y débito desde nuestro sitio. Tambien con efectivo, tarjeta de crédito y tarjeta de débito por MercadoPago.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Quiero cancelar mi orden
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">Envianos un mail con el número de compra y tus datos a <a href="mailto:postventa@pretashop.com.ar">postventa@pretashop.com.ar</a> indicando el problema.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Quiero cancelar mi orden
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">Envianos un mail con el número de compra y tus datos a <a href="mailto:postventa@pretashop.com.ar">postventa@pretashop.com.ar</a> indicando el problema.
      </div>
    </div>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@endsection
