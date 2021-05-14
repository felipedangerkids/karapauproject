@extends('layouts.painel')


@section('content')
<p>Consultores</p>
<div class="col-md-12">
      <form action="{{ route('admin.consultores.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                  <div class="col-md-6">
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Nome</label>
                              <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Senha</label>
                              <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group col-md-12">
                              <label for="exampleInputEmail1">Confirmar Senha</label>
                              <input type="password" class="form-control" name="confirm-password">
                        </div>

                        <div class="form-group col-md-6">
                              <label for="exampleInputEmail1"></label>
                              <input type="submit" class="form-control btn btn-dark" value="Cadastrar">
                        </div>
                  </div>
            </div>
      </form>
</div>
<table class="table">
      <thead>
            <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Ação</th>
            </tr>
      </thead>
      <tbody>
            @foreach ($consultores as $con)
                <tr>
                              <th scope="row">{{ $con->id }}</th>
                              <td>{{ $con->name }}</td>
                              <td>{{ $con->email }}</td>
                              <td>
                                  <a href="{{ route('admin.consultores.delete', $con->id) }}">  <button class="btn btn-danger">Apagar</button></a>
                              </td>
                        </tr>
            @endforeach
    

      </tbody>
</table>
@endsection