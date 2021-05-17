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
      <form action="{{ route('pescador.produto.store') }}" method="POST">
            @csrf
            <div class="mt-3">
                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Espécie</label>
                        <select class="form-control" name="especie_id" id="exampleFormControlSelect1">
                              @foreach ($especies as $especie)
                              <option value="{{ $especie->id }}">{{ $especie->nome_portugues }}</option>
                              @endforeach

                        </select>
                  </div>

                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Espécie</label>
                        <select class="form-control" name="porto_id" id="exampleFormControlSelect1">
                              @foreach ($portos as $porto)
                              <option value="{{ $porto->id }}">{{ $porto->nome }}</option>
                              @endforeach

                        </select>
                  </div>

                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Nome da Embarcação</label>
                        <input type="text" required class="form-control" value="{{ auth()->user()->nome_embarcacao }}"
                              name="embarcacao">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Zona de Pesca</label>
                        <input type="text" required class="form-control" name="zona">
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Tamanho</label>
                        <select class="form-control" name="tamanho" id="exampleFormControlSelect1">
                              <option>Escolha o Tamanho</option>
                              <option value="tamanho1">Tamanho 1 (T1)</option>
                              <option value="tamanho2">Tamanho 2 (T2)</option>
                              <option value="tamanho3">Tamanho 3 (T3)</option>
                              <option value="tamanho4">Tamanho 4 (T4)</option>
                        </select>
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Arte</label>
                        <select class="form-control" name="arte" id="exampleFormControlSelect1">
                              <option>Escolha a Arte</option>
                              <option value="rede">Rede</option>
                              <option value="vara">Vara</option>

                        </select>
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Quantidade</label>
                        <select class="form-control" name="quantidade" id="exampleFormControlSelect1">
                              <option>Escolha a Quantidade</option>
                              <option value="10">10</option>
                              <option value="20">20</option>
                              <option value="30">30</option>
                              <option value="40">40</option>
                              <option value="50">50</option>
                        </select>
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleFormControlSelect1">Unidade</label>
                        <select class="form-control" name="unidade" id="exampleFormControlSelect1">
                              <option value="unid">Unid</option>
                              <option value="kg">Kg</option>
                        </select>
                  </div>
                  <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Preço</label>
                        <input type="text" required class="form-control" name="preco">
                  </div>
            </div>
            <div class="form-group col-md-12">
                  <label for="exampleInputEmail1"></label>
                  <input type="submit" required class="form-control btn btn-dark" value="Cadastrar">
            </div>
            <div class="form-group col-md-12">
                  <label for="exampleInputEmail1"></label>
                  <a href=""> <input type="button" class="form-control btn btn-dark" value="Cancelar e Voltar"></a>
            </div>
</div>
</form>

</div>

@endsection