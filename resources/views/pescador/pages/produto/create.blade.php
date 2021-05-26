@extends('layouts.app-pescador')

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
                  <span>CADASTRO DE PEIXE</span>
            </div>
      </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
</div>
@endif

<div class="container login-py">
      <form action="{{ route('pescador.produto.store') }}" method="POST">
            @csrf
            <div class="mt-3">
                  <div class="form-group input-material">
                        <select class="form-control" name="especie_id" id="name_field">
                              <option>Escolha a Espécie</option>
                              @foreach ($especies as $especie)
                              <option value="{{ $especie->id }}">{{ $especie->nome_portugues }}</option>
                              @endforeach

                        </select>
                  </div>

                  <div class="form-group input-material">

                        <select class="form-control" name="porto_id" id="exampleFormControlSelect1">
                              <option>Escolha o Porto</option>
                              @foreach ($portos as $porto)
                              <option value="{{ $porto->id }}">{{ $porto->nome }}</option>
                              @endforeach

                        </select>
                  </div>

                  <div class="form-group input-material">
                        <input type="text" class="form-control" value="{{ auth()->user()->nome_embarcacao }}"
                              name="embarcacao">
                        <label for="name-field">Nome da Embarcação</label>
                  </div>
                  <div class="form-group input-material">
                        <input type="text" class="form-control" name="zona">
                        <label for="name-field">Zona de Pesca</label>
                  </div>
                  <div class="form-group input-material">
                        <select class="form-control" name="tamanho" id="exampleFormControlSelect1">
                              <option>Escolha o Tamanho</option>
                              <option value="tamanho1">Tamanho 1 (T1)</option>
                              <option value="tamanho2">Tamanho 2 (T2)</option>
                              <option value="tamanho3">Tamanho 3 (T3)</option>
                              <option value="tamanho4">Tamanho 4 (T4)</option>
                        </select>
                  </div>
                  <div class="form-group input-material">
                        <select class="form-control" name="arte" id="exampleFormControlSelect1">
                              <option>Escolha a Arte</option>
                              <option value="rede">Rede</option>
                              <option value="vara">Vara</option>

                        </select>
                  </div>
                  <div class="form-group input-material">
                        <input type="number" class="form-control" name="quantidade">
                        <label for="name-field">Quantidade</label>
                  </div>
                  <div class="form-group input-material">
                        <select class="form-control" name="unidade" id="exampleFormControlSelect1">
                              <option value="unid">Unid</option>
                              <option value="kg">Kg</option>
                        </select>
                  </div>
                  <div class="form-group input-material">
                        <input type="number" class="form-control" name="preco">
                        <label for="name-field">Preço</label>
                  </div>
            </div>
            <div class="btn-box py-4"><button class="btn btn-submit" type="submit">Cadastrar E Vender</button>

            </div>

</div>
</form>

</div>

@endsection