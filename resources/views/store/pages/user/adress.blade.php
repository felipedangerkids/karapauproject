@extends('layouts.app-store')


@section('content')
<div class="header-top">
      <div class="container">
            <div class="d-flex icons">
                  <div class="mx-3">
                        <img src="{{ url('app-store/img/icons/icone-notificacoes.svg') }}" alt="">
                  </div>
                  <div class="mx-3">
                        <img src="{{ url('app-store/img/icons/edit-off.svg') }}" alt="">
                  </div>

            </div>

      </div>
</div>

<div class="container">
      <div class="title">
            <p>Olá, {{ auth()->user()->nome }}</p>
      </div>

      <div class="mt-4">
            <form action="{{ route('store.adress.save') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      
                        <input type="hidden" class="form-control" name="user_id" value="{{ auth()->user()->id }}">

                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Morada</label>
                        <input type="text" class="form-control" name="morada">

                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Código Postal</label>
                        <input type="text" class="form-control" name="codigo_postal">

                  </div>
                  <div class="form-group">
                        <label for="exampleInputEmail1">Região</label>
                        <input type="text" class="form-control" name="regiao" >

                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Distrito</label>
                        <input type="text" class="form-control" name="distrito" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Conselho</label>
                        <input type="text" class="form-control" name="conselho" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Freguesia</label>
                        <input type="text" class="form-control" name="freguesia" id="exampleInputPassword1">
                  </div>
                  <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
            </form>
      </div>
  
</div>

@endsection