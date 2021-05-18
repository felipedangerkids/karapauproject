@extends('layouts.painel')


@section('content')

<div class="container">
      <div>
            <p>Compradores Individuais</p>
      </div>
      <table class="table table-sm table-dark">
            <thead>
                  <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acão</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($comprador1 as $comp1)
                  <tr class="@if($comp1->status == 0) bg-danger @else bg-success  @endif ">
                        <th scope="row">{{ $comp1->id }}</th>
                        <td>{{ $comp1->nome }}</td>
                        <td>{{ $comp1->email }}</td>
                        <td>@if($comp1->status == 0)
                              Inativo @else
                              Ativo
                              @endif
                        </td>
                        <td>
                              <button class="btn btn-sm btn-dark">Fallow Up</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>

      <div>
            <p>Compradores Coletivos</p>
      </div>
</div>
<div class="container">
      <table class="table table-sm table-dark">
            <thead>
                  <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acão</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($comprador2 as $comp2)
                  <tr class="@if($comp2->status == 0) bg-danger @else bg-success  @endif ">
                        <th scope="row">{{ $comp2->id }}</th>
                        <td>{{ $comp2->nome }}</td>
                        <td>{{ $comp2->email }}</td>
                        <td>@if($comp2->status == 0)
                              Inativo @else
                              Ativo
                              @endif
                        </td>
                        <td>
                              <button class="btn btn-sm btn-dark">Fallow Up</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>
</div>


@endsection