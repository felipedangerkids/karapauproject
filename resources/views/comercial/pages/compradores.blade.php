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
                        <td data-label="Status">{{ $comp1->status }}</td>
                        <td data-label="Acão">
                              <button class="btn btn-dark">Ver</button>
                        </td>
                  </tr>
                  @endforeach

            </tbody>
      </table>
</div>
@endsection