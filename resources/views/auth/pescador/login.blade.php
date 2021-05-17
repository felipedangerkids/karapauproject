@extends('layouts.app')

@section('content')
<div class="header">
      <div class="container d-flex flex-column pt-3">
            <div class="text-center">
                  <img src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>
            <div class="mx-auto">
                  <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Registo</a>
                        </li>

                  </ul>
             

            </div>
         
      </div>
</div>
<div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                  <form action="{{ route('pescador.login') }}" method="POST">
                        @csrf
                        <div class="px-4 pt-4">
                              <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                          aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                              </div>
                              <div class="text-center">
                                    <button type="submit" class="btn btn-primary ">Entrar</button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                  <form action="{{ route('pescador.store') }}" method="POST">
                        @csrf
                        <div class="px-4 pt-4">
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
                                    <input type="password" name="password" class="form-control"
                                          id="exampleInputPassword1">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Confirmar Senha</label>
                                    <input type="password" name="confirm-password" class="form-control"
                                          id="exampleInputPassword1">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputEmail1">Telemovel</label>
                                    <input type="text" name="telefone" class="form-control">
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
                        </div>
                  </form>
            </div>
      </div>

</div>


@endsection