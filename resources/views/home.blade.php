@extends('layouts.master')

@section('content')

<main>
  <!-- Primeiro carousel -->
  <section class="glide glide_main">
    <div class="glide__track glide__track__main" data-glide-el="track">
      <ul class="glide__slides glide__slides__main">
        <li class="glide__slide"><img src="img/slider1.png" alt="" /></li>
        <li class="glide__slide"><img src="img/slider2.png" alt="" /></li>
        <li class="glide__slide"><img src="img/slider3.png" alt="" /></li>
        <li class="glide__slide"><img src="img/slider4.png" alt="" /></li>
        <li class="glide__slide"><img src="img/slider5.png" alt="" /></li>
        <li class="glide__slide"><img src="img/slider6.png" alt="" /></li>
      </ul>
    </div>

    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
    </div>

    <div class="glide__bullets" data-glide-el="controls[nav]">
      <button class="glide__bullet" data-glide-dir="=0"></button>
      <button class="glide__bullet" data-glide-dir="=1"></button>
      <button class="glide__bullet" data-glide-dir="=2"></button>
      <button class="glide__bullet" data-glide-dir="=3"></button>
      <button class="glide__bullet" data-glide-dir="=4"></button>
      <button class="glide__bullet" data-glide-dir="=5"></button>
    </div>
  </section>

  <!-- Seção de destaques -->
  <section id="destaques">
    <h2>Destaques</h2>
    <div class="glide glide__track glideMultiplos glide_destaques">
      <div class="glide__track glide__track__multiplo" data-glide-el="track">
        <ul class="glide__slides">
          <h1>LISTAR LIVROS AQUI</h1>
        </ul>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Seção de ofertas -->
  <section id="ofertas">
    <h2>Ofertas</h2>
    <div class="glide glideMultiplos glide_ofertas">
      <div class="glide__track glide__track__multiplo" data-glide-el="track">
        <ul class="glide__slides">
          <h1>LISTAR LIVROS OFERTAS</h1>
        </ul>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Formulário de newsletter -->
  <section class="newsletter">
    <p class="m-0">Assine nossa newsletter: </p>
    <form>
      <input type="email" name="newsletter" placeholder="Digite seu email">
      <button>Enviar</button>
    </form>
  </section>

</main>


<!-- <?php $show_glide = TRUE; ?> -->

@stop