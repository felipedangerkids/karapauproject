@extends('layouts.painel')


@section('content')
<p>Consultores</p>
<a href="{{ route('admin.consultores.create') }}"><button class="btn btn-dark my-2">Adicionar Comercial</button></a>
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