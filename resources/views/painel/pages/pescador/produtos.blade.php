@extends('layouts.painel')


@section('content')
<p>Pescador</p>

<div class="container">
      <table class="table">
            <thead class="thead-dark">
                  <tr>
                        <th scope="col">Espécie</th>
                        <th scope="col">Quatidade</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Tempo</th>
                        <th scope="col">Ação</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($produtos as $item)

                  <tr>
                        <th scope="row">{{ $item->especies->nome_portugues }}</th>
                        <td>{{ $item->quantidade }}{{ $item->unidade }}</td>
                        <td>{{ $item->preco }}</td>
                        <td>
                              <div id="clock"
                                          data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($item->created_at))) }}">

                              </div>
                        </td>
                        <td>
                              <div class="d-flex">
                      
                              <div class="mx-1">
                                    <button class="btn btn-danger btn-sm">Inativar</button>
                              </div>
                             
                        </div>
</td>
</tr>

@endforeach

</tbody>
</table>


</div>

@endsection