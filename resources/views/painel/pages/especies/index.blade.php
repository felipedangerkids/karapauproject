@extends('layouts.painel')


@section('content')
<p>Espécies</p>

<div>
      <div>
            <a href="{{ route('admin.especies.create') }}"><button class="btn btn-dark my-2">Adicionar Espécie</button></a>
            <table class="table table-striped">
                  <thead>
                        <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Espécie</th>
                              <th scope="col">Foto</th>
                              <th scope="col">Acão</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($especies as $especie)
                          <tr>
                                                <th scope="row">{{ $especie->id }}</th>
                                                <td>{{ $especie->nome_portugues }}</td>
                                                <td>
                                                      <img width="70" src="{{ asset('storage/especies/'. $especie->image) }}" alt="">
                                                </td>
                                                <td>
                                                      <div class="d-flex">
                                                            <div>
                                                                  <button class="btn btn-danger ">Apagar</button>
                                                            </div>
                                                            <div>
                                                                 <a href="{{ route('admin.especies.show', $especie->id) }}"> <button class="btn btn-primary ml-2">Editar</button></a>
                                                            </div>
                                                      </div>
                                                </td>
                                          </tr>  
                        @endforeach
    
                  </tbody>
            </table>
            {{ $especies->links() }}
      </div>
</div>
@endsection