@extends('layouts.master')
@include('home_carousel')

@section('content')

<main id='home'>

	@yield('home_carousel')

	<section id='section-editoras'>
		<h2>BUSCA POR EDITORAS</h2>
		<div class="row py-5 editoras">
			<div class="col-lg-3">
				<!-- Item -->
				<figure class="caption-3 mb-0 shadow-sm p-3">
					<img src="../img/alta-books-bg.jpg" alt="" class="w-100 editora-imagem">
					<figcaption class="px-3 py-3 bg-white shadow-sm">
						<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/Alta-Books.jpg"></h2>
					</figcaption>
				</figure>

			</div>

			<div class="col-lg-3">
				<!-- Item -->
				<figure class="caption-3 mb-0 shadow-sm p-3">
					<img src="../img/rocco-bg.jpg" alt="" class="w-100 editora-imagem">
					<figcaption class="px-3 py-3 bg-white shadow-sm">
						<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/rocco.jpg"></h2>
					</figcaption>
				</figure>

			</div>
			<div class="col-lg-3">
				<!-- Item -->
				<figure class="caption-3 mb-0 shadow-sm p-3">
					<img src="../img/companhia-das-letras-bg.jpg" alt="" class="w-100 editora-imagem">
					<figcaption class="px-3 py-3 bg-white shadow-sm">
						<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/companhia-das-letras.jpg"></h2>
					</figcaption>
				</figure>

			</div>
	</section>

	<!-- Formulário de newsletter -->
	<section class="newsletter">
		<p class="m-0 text-right">Cadastre seu e-mail e ganhe um cupom para sua primeira compra: </p>
		<div class="input-group">
			<input type="text" class="form-control" placeholder="email@email.com.br" aria-label="Digite seu email" aria-describedby="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-light" type="button" id="button-addon2"><i class="fas fa-chevron-right"></i></button>
			</div>
		</div>
	</section>

</main>

<?php $show_glide = TRUE; ?>
@stop