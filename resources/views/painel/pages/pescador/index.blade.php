@extends('layouts.painel')


@section('content')
<p>Pescador</p>


<div class="container">
      <table class="table">
            <thead class="thead-dark">
                  <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Embarcação</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ação</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($pescadores as $pescador)
                  <tr>
                        <th scope="row">{{ $pescador->name }}</th>
                        <td>{{ $pescador->nome_embarcacao }}</td>
                        <td>{{ $pescador->email }}</td>
                        <td>
                              <div class="d-flex">
                                    <div class="mx-1">
                                          <button class="btn btn-dark btn-sm">Ver Produtos</button>
                                    </div>
                                    <div class="mx-1">
                                          <button class="btn btn-primary btn-sm">Editar</button>
                                    </div>
                                    <div class="mx-1">
                                          <button class="btn btn-danger btn-sm">Inativar</button>
                                    </div>
                                    <div class="mx-1">
                                          <button class="btn btn-info btn-sm">Ver Encomendas</button>
                                    </div>
                              </div>
                        </td>
                  </tr>
                  @endforeach


            </tbody>
      </table>


</div>
@endsection