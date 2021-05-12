@extends('layouts.app')


@section('content')
<div class="header">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div>
      <div class="container mt-3 px-5">
            <form action="{{ route('consultor.login') }}" method="POST">
                  @csrf
                  <div class="row justify-content-center">
                        <div class="form-group col-12">
                              <label for="exampleInputEmail1">E-mail</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                        </div>
                        <div class="form-group col-12">
                              <label for="exampleInputPassword1">Senha</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group col-10">
                              <input type="submit" class="form-control btn btn-dark" value="Entrar">
                        </div>
                  </div>
            </form>
      </div>
</div>
@endsection