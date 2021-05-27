@extends('layouts.painel')


@section('content')
<p>Pescador Editar</p>
<div class="col-md-12">
      <form action="{{ route('admin.pescador.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                  <div class="form-group col-md-8">
                        <label for="exampleFormControlSelect1">Espécie</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                              <option>{{ $produto->especies->nome_portugues }} | Atual </option>

                              @foreach ($especies as $especie)
                                    <option value="{{ $especie->id }}">{{ $especie->nome_portugues }}</option>
                              @endforeach
                        </select>
                  </div>

                  <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"></label>
                        <input type="submit" class="form-control btn btn-dark" id="exampleInputEmail1"
                              aria-describedby="emailHelp" value="Atualizar">
                  </div>


            </div>
      </form>
</div>



@endsection