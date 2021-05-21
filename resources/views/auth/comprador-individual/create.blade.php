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
                  <a href="javascript:history.back()"> <i class="fas fa-chevron-left"></i> Voltar</a>
            </div>
            <div>
                  <span>CADASTRO DE COMPRADOR</span>
            </div>
      </div>
</div>
<div class="container login-py">
      <div class="mt-3">
            <div class="wrapper">
                  <form action="{{ route('consultor.comprador-individual.store') }}" method="POST">
                        @csrf
                        <div class="form-group input-material">
                              <input type="text" class="form-control" name="nome" id="name-field">
                              <label for="name-field">Nome</label>
                        </div>
                        <div class="form-group input-material">
                              <input type="text" class="form-control" name="sobrenome" id="name-field">
                              <label for="name-field">Sobrenome</label>
                        </div>
                        <div class="form-group input-material">
                              <input type="email" class="form-control" name="email" id="name-field">
                              <label for="name-field">Email</label>
                        </div>
                        <div class="form-group input-material">
                              <input type="text" class="form-control" name="telemovel" id="name-field">
                              <label for="name-field">Telemovel</label>
                        </div>
                        <div class="form-group input-material">
                              <input type="text" class="form-control" name="morada" id="name-field">
                              <label for="name-field">Morada</label>
                        </div>
                        <div class="form-group input-material">
                              <input type="text" class="form-control" name="nif" id="name-field">
                              <label for="name-field">NIF</label>
                        </div>

                        <div class="btn-box py-4"><button class="btn btn-submit" type="submit">Cadastrar</button>

                        </div>
                  </form>
            </div>

      </div>


</div>
@endsection