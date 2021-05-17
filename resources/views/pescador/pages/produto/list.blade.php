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
      <table class="table">
            <thead>
                  <tr>
                        <th scope="col">Especie</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Tempo</th>
                        <th scope="col">Acões</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($produtos as $produto)
                  <tr>
                        <th scope="row">
                         {{ $produto->especies->nome_portugues }}
                        </th>
                        <td><img width="40" src="{{ url('storage/especies/'.$produto->especies->image) }}" alt=""></td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->created_at }}</td>
                        <td>
                              <button disabled class="btn btn-danger">Apagar</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>
</div>

@endsection