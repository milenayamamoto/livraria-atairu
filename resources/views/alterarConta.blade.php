@extends('layouts.master')
@extends('conta')
@section('content')

<main id="altera-conta-principal" class="justify-content-center altera-conta-principal">
    <section>
        <h1>Alterar Dados de Login </h1>
        <div id="altera-conta" class="mb-3 hidden">
              <div class="container altera-container">
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif

                <form method="POST" action="{{route('conta.update')}}" >
                    {{csrf_field()}}

                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Nome Completo:</label>
                            <input name="nome" class="altera-conta-nome" class="altera-conta-nome" value="{{ auth()->user()->name}}">        
                        </div>
                    </div>
            </div>
            <div class="container altera-container">
                <div class="row altera-conta-div-principal">
                    <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                        <label class="altera-conta-nome">E-mail:</label>
                        <input name="email" class="altera-conta-nome" class="altera-conta-nome" value="{{ auth()->user()->email}}"> 
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Senha:</label>
                            <input name="password" type="password" class="altera-conta-nome" class="altera-conta-nome"> 
                        </div>
                    </div>
                </div>
            </div>
             <button type="submit" class="btn btn-secondary altera-conta-botao" >Alterar Cadastro</button>

            <div class="form-group">
                <label class="altera-conta-nome">Desejo excluir a conta</label>
                <a class="btn btn-link" href="{{ route('conta.delete') }}">
                    {{ __('Excluir cadastro') }}
                </a>
            </div>
        </div>
        
            </form>
    </section>
</main>

@stop