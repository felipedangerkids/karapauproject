@extends('layouts.app')

@section('content')
<div class="header">
      <div class="container d-flex flex-column pt-3">
            <div class="text-center">
                  <img src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>

      </div>
</div>
<div class="container">

      <div class="px-4 pt-4">
            <form  method="POST">
                  @csrf
                  <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Sobrenome</label>
                        <input type="text" name="lastname" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar Senha</label>
                        <input type="password" name="confirm-password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Telemovel</label>
                        <input type="text" name="telemovel" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Morada</label>
                        <input type="text" name="morada" class="form-control">
                  </div>

                  <div class="row">
                        <div class="form-group col-6">
                              <label for="exampleInputEmail1">NIF</label>
                              <input type="text" name="nif" class="form-control">
                        </div>
                        <div class="form-group col-6">
                              <label for="exampleInputEmail1">IBAN</label>
                              <input type="text" name="iban" class="form-control">
                        </div>
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlSelect1">Porto de Registo</label>
                        <select class="form-control" name="porto" id="exampleFormControlSelect1">
                              <option>Escolha o Porto</option>
                              @foreach ($portos as $porto)
                              <option value="{{ $porto->id }}">{{ $porto->nome }}</option>
                              @endforeach

                        </select>
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Zona de Pesca</label>
                        <input type="text" name="fishing_zone" class="form-control">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Nome da Embarcação</label>
                        <input type="text" name="nome_embarcacao" class="form-control">
                  </div>
                  <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                  </div>
            </form>
      </div>

</div>


@endsection