@extends('layouts.app-comercial')


@section('content')
<div class="header">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('app-comercial/img/logo-img.svg') }}" alt="">
            </div>
      </div>
</div>
<div>
      <div class="d-flex justify-content-between container voltar py-4 mb-5">
            <div>
                  <a href=""> <i class="fas fa-chevron-left"></i> Voltar</a>
            </div>
            <div>
                  <span>CADASTRO DE COMPRADOR</span>
            </div>
      </div>
</div>
<div class="container">
      <div class="mt-3">
            <div class="wrapper">
                  <form action="{{ route('consultor.comprador-individual.store') }}" method="POST">
                        @csrf
                        <div class="group"><input type="text" required="required" /><span class="highlight"></span><span
                                    class="bar"></span><label>Name</label>
                        </div>
                        <div class="group"><input type="text" required="required" /><span class="highlight"></span><span
                                    class="bar"></span><label>Sobrenome</label>
                        </div>
                        <div class="group"><input type="text" required="required" /><span
                                    class="highlight"></span><span class="bar"></span><label>Email</label></div>
                        <div class="group"><input type="text" required="required" /><span class="highlight"></span><span
                                    class="bar"></span><label>Telemovel</label>
                        </div>
                        <div class="group"><input type="text" required="required" /><span class="highlight"></span><span
                                    class="bar"></span><label>Morada</label>
                        </div>
                        <div class="group"><input type="number" required="required" /><span class="highlight"></span><span
                                    class="bar"></span><label>NIF</label>
                        </div>


                        <div class="btn-box py-4"><button class="btn btn-submit" type="submit">Cadastrar</button><button
                                    class="btn btn-cancel" type="button">Cancelar</button>

                        </div>
                  </form>
            </div>

      </div>


</div>
@endsection