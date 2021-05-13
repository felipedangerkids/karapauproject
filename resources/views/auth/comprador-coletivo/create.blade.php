@extends('layouts.app')


@section('content')
<div class="header">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>

<div class="container">
      <form action="{{ route('consultor.comprador-coletivo.store') }}" method="POST">
            @csrf
            <div class="mt-3">
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" required class="form-control" name="nome">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Sobrenome</label>
                        <input type="text" required class="form-control" name="sobrenome">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" required class="form-control" name="email">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Telemóvel</label>
                        <input type="text" required class="form-control" name="telemovel">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Morada</label>
                        <input type="text" required class="form-control" name="morada">
                  </div>
                  <div class="row container">
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="peixaria" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                  Peixaria
                              </label>
                        </div>
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="varina" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                   Varina
                              </label>
                        </div>
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="retalho" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                    Retalho
                              </label>
                        </div>
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="restauracao" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                    Restauração
                              </label>
                        </div>
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="hotelaria" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                   Hotelaria
                              </label>
                        </div>
                        <div class="form-check col-6">
                              <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1"
                                    value="outros" checked>
                              <label class="form-check-label" for="exampleRadios1">
                                 Outros
                              </label>
                        </div>
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"></label>
                        <input type="submit" class="form-control btn btn-dark" value="Cadastrar">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"></label>
                        <a href=""> <input type="button" class="form-control btn btn-dark"
                                    value="Cancelar e Voltar"></a>
                  </div>
            </div>
      </form>

</div>
@endsection