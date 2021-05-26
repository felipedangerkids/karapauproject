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
                  <span>LISTA DE PEIXES</span>
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
                        <td>
                              <div id="clock" data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($produto->created_at))) }}"> </div>
                        </td>
                        <td>
                              <button disabled class="btn btn-danger">Apagar</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>
</div>
<script>

</script>
@endsection