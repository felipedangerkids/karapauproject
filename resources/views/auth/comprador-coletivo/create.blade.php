@extends('layouts.app-comercial')


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
                  <span>CADASTRO DE COMPRADOR</span>
            </div>
      </div>
</div>
<div class="container">
      <form action="{{ route('consultor.comprador-coletivo.store') }}" method="POST">
            @csrf
            <div class="group"><input type="text" name="nome" required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>Name</label>
            </div>
            <div class="group"><input type="text" name="sobrenome"  required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>Sobrenome</label>
            </div>
            <div class="group"><input type="text" name="email" required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>Email</label></div>
            <div class="group"><input type="number" name="telemovel" required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>Telemovel</label>
            </div>
            <div class="group"><input type="text" name="morada" required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>Morada</label>
            </div>
            <div class="group"><input type="number" name="nif" required="required" /><span class="highlight"></span><span
                        class="bar"></span><label>NIF</label>
            </div>

            <div class="row">
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="peixaria" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">PEIXARIA</label>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="retalho" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">RETALHO</label>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="outros" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">OUTROS</label>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="restauracao" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">RESTAURAÇÃO</label>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="varina" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">VARINA</label>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="mdc-form-field">
                              <div class="mdc-radio">
                                    <input class="mdc-radio__native-control" value="hotelaria" type="radio" id="radio-1" name="tipo">
                                    <div class="mdc-radio__background">
                                          <div class="mdc-radio__outer-circle"></div>
                                          <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div class="mdc-radio__ripple"></div>
                              </div>
                              <label class="" for="radio-1">HOTELARIA</label>
                        </div>
                  </div>
   
            </div>
            <div class="btn-box py-4"><button class="btn btn-submit" type="submit">Cadastrar</button><button
                        class="btn btn-cancel" type="button">Cancelar</button>

            </div>
      </form>

</div>
@endsection