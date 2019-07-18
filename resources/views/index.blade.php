@extends('layouts.master')
@yield('title')
<title>PRETA - HOME</title>
@section('styles')
            <link href="/css/home.css" rel="stylesheet">
@endsection

@section('content')


 <!-- ___________________________________SECCION HERO / SLIDE __________________________________________________-->

 <section class="Hero">
      <div class="glider-contain" id="hero">
        <div class="glider draggable" id="glider-single">
          <div>
            <picture>
              <source
                media="(min-width: 1200px)"
                srcset="/images/hero-d.jpg"
              />
              <source
                media="(min-width: 768px)"
                srcset="/images/hero-d.jpg"
              />
              <img src="/images/hero-m.jpg" />
            </picture>
          </div>
          <div>
            <picture>
              <source
                media="(min-width: 1200px)"
                srcset="/images/hero-d.jpg"
              />
              <source
                media="(min-width: 768px)"
                srcset="/images/hero-d.jpg"
              />
              <img src="/images/hero-m.jpg" />
            </picture>
          </div>
          <div>
            <picture>
              <source
                media="(min-width: 1200px)"
                srcset="/images/hero-d.jpg"
              />
              <source
                media="(min-width: 768px)"
                srcset="/images/hero-d.jpg"
              />
              <img src="/images/hero-m.jpg" />
            </picture>
          </div>
        </div>


        <button role="button" aria-label="Previous" class="glider-prev ">
          <i class="material-icons arrow">
            arrow_back_ios
          </i>
        </button>
        <button role="button" aria-label="Next" class="glider-next">
          <i class="material-icons arrow">
            arrow_forward_ios
          </i>
        </button>
        <div class="dots glider-dots punto">
          <button data-index="" aria-label="Page 1" class="glider-dot"></button>
          <button data-index="" aria-label="Page 2" class="glider-dot"></button>
        </div>
      </div>

      <div class="Hero-descuento">
        <h2>60% OFF JACKETS</h2>
        <a href="{{  url('/shopby/sale') }}">
          <h2>SHOP NOW</h2>
        </a>
      </div>
    </section>

    <!-- ___________________________________END SECCION HERO / SLIDE ______________________________________________-->
   <!-- ___________________________________SECCION ALL / VIDEO ___________________________________________________-->

   <section class="allSeason">
      <a href="{{  url('/shopby/newin') }}">
        <div class="allSeason-titulo">
          <div>
            <h2>ALL // NEW SEASON</h2>
          </div>
          <div class="allSeason-arrows">
            <i class="material-icons allSeason-arrow">keyboard_arrow_right</i>
            <i class="material-icons allSeason-arrow">keyboard_arrow_right</i>
          </div>
        </div>
      </a>

      <div class="allSeason-video">
        <iframe
          class="videoIframe js-videoIframe"
          width="560"
          height="315"
          src="https://www.youtube.com/embed/F0DS7TQh8R8?start=4"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
        <button class="videoPoster js-videoPoster"></button>
      </div>
    </section>

    <!-- ___________________________________END SECCION ALL / VIDEO ___________________________________________________-->

    <!-- ___________________________________SECCION NEW IN ___________________________________________________-->

    <section class="newIn">
      <div class="newIn-titulo">
        <h2>NEW IN</h2>
      </div>
      <div class="glider-contain2">
        <div class="glider2 draggable">
<?php foreach ($newIn as $producto): ?>

          <div class="g-slide">
            <div class="icon">
              <i class="material-icons favorito">favorite </i>
            </div>

            <picture>
              <source
                media="(min-width: 1200px)"
                srcset="/storage/{{$producto->photo1}}"
              />
              <source
                media="(min-width: 768px)"
                srcset="/storage/{{$producto->photo1}}"
              />
              <img src="/storage/{{$producto->photo1}}" />
            </picture>
            <div class="newIn-bajadaFoto">
              <a href="/shop/{{$producto->id}}"><h3>{{$producto->name}}</h3></a>
              <h4>{{$producto->price}}</h4>
            </div>
          </div>
        <?php endforeach; ?>

        </div>


        <button role="button" aria-label="Previous" class="glider-prev2 ">
          <i class="material-icons arrow arrow__black">
            arrow_back_ios
          </i>
        </button>
        <button role="button" aria-label="Next" class="glider-next2">
          <i class="material-icons arrow arrow__black">
            arrow_forward_ios
          </i>
        </button>
        <div id="resp-dots" class="glider-dots punto">
          <button data-index="" aria-label="Page 1" class="glider-dot"></button>
          <button data-index="" aria-label="Page 2" class="glider-dot"></button>
        </div>
      </div>
    </section>
    <!-- ___________________________________END SECCION NEW IN ___________________________________________________-->

    <!-- ___________________________________SECCION CATEGORIA ______________________________________________-->

    <section class="categoria">
      <div class="categoria-plano">
        <div class="categoria-plano1">
          <h2>>ACA VA DESCUENTO</h2>
        </div>
        <div class="categoria-plano1 borrar-mt">
          <h2>>ACA VA DESCUENTO</h2>
        </div>
      </div>
      <div class="categorias">
        <div class="categoria-1">
          <a href="/shop/jeans/1">
            <img src="/images/products/denim/icon-denim.jpeg" alt="" />
          <h3>JEANS</h3></a>
        </div>

        <div class="categoria-1">
          <a href="/shop/abrigos/3">
          <img src="/images/products/outerwear/icon-dresses.jpeg" alt="" />
          <h3>ABRIGOS</h3></a>
        </div>

        <div class="categoria-1">
          <a href="/shop/vestidos/4">
          <img src="/images/products/dresses/icon-dresses.jpeg" alt="" />
          <h3>VESTIDOS</h3></a>
        </div>

        <div class="categoria-1">
          <a href="/shop/tops/2">
          <img src="/images/products/tops/icon-tops.jpeg" alt="" />
          <h3>TOPS</h3></a>
        </div>
      </div>
    </section>

    <!-- ___________________________________END SECCION CATEGORIA ______________________________________________-->

@include('partials/instagram')

    <!-- ___________________________________BOTON BACK TO TOP______________________________________________-->
    <div class="boton-back">
      <i class="material-icons back-arrow">expand_less</i>
      <a href="#hero">
        <h4>BACK TO TOP</h4>
      </a>
      <i class="material-icons back-arrow">expand_less</i>
    </div>

    <!-- ___________________________________END BOTON BACK TO TOP______________________________________________-->



@endsection
