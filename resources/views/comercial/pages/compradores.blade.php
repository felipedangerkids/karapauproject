@extends('layouts.app')

@section('content')
<div class="container">
      <table class="mt-4">
            <thead>
                  <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acão</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($comprador1 as $comp1)
                  <tr>
                        <td data-label="Nome">{{ $comp1->nome }} {{ $comp1->sobrenome }}</td>
                        <td data-label="E-mail">{{ $comp1->email }}</td>
                        <td data-label="Status" class="@if($comp1->status == 0) bg-danger @else bg-success @endif">
                              @if( $comp1->status == 0)
                              Inátivo
                              @else 
                              Ativo
                              @endif
                        </td>
                        <td data-label="Acão">
                              <button class="btn btn-dark">Ver</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>
</div>
@endsection