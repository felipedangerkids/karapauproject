@extends('layouts.painel')


@section('content')

<div class="col-md-12">
      <form action="{{ route('admin.consultores.update', $consultor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                  <div class="col-md-6">
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Nome</label>
                              <input type="text" class="form-control" value="{{ $consultor->name }}" name="name">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Sobrenome</label>
                              <input type="text" class="form-control" value="{{ $consultor->lastname }}" name="lastname">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" class="form-control" value="{{ $consultor->email }}" name="email">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Senha</label>
                              <input type="password" class="form-control"  name="password">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Confirmar Senha</label>
                              <input type="password" class="form-control"  name="confirm-password">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Foto</label>
                              <input type="file" class="form-control" value="{{ $consultor->image }}" name="image">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Morada</label>
                              <input type="text" class="form-control" value="{{ $consultor->morada }}" name="morada">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">IBAN</label>
                              <input type="text" class="form-control" value="{{ $consultor->iban }}" name="iban">
                        </div>

                        <div class="form-group col-md-6">
                              <label for="exampleInputEmail1"></label>
                              <input type="submit" class="form-control btn btn-dark" value="Cadastrar">
                        </div>
                  </div>
            </div>
      </form>
</div>


@endsection