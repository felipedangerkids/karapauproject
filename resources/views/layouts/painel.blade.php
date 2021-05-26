<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>Karapau</title>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
            integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="{{ url('painel/css/main.min.css') }}">

      <!-- Font Awesome JS -->
      <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>

</head>

<body>

      <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                  <div class="sidebar-header">
                        <div class="text-center">
                              <img src="{{ url('painel/img/logo.svg') }}" alt="">
                        </div>
                  </div>

                  <ul class="list-unstyled  components">


                        <li>
                              <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>
                        <li>
                              <a href="{{ route('admin.pescador') }}"><i class="fas fa-boxes"></i> Pescadores</a>
                        </li>
                        <li>
                              <a href="#"><i class="fas fa-box"></i> Encomendas</a>
                        </li>
                        <li>
                              <a href="#cadastros" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle"><i class="fas fa-user-plus"></i> Cadastros</a>
                              <ul class="collapse list-unstyled" id="cadastros">
                                    <li>
                                          <a href="{{ route('admin.especies') }}">Espécies</a>
                                    </li>
                                    <li>
                                          <a href="{{ route('admin.porto') }}">Portos</a>
                                    </li>
                              

                              </ul>
                        </li>
                        <li>
                              <a href="#"><i class="fas fa-truck"></i> Entregadores</a>
                        </li>
                        <li>
                              <a href="{{ route('admin.consultores') }}"><i class="fas fa-briefcase"></i> Comerciais</a>
                        </li>
                        <li>
                              <a href="#"><i class="far fa-heart"></i> Comissões</a>
                        </li>
                        <li>
                              <a href="#"><i class="far fa-file-alt"></i> Faturas</a>
                        </li>
                        <li>
                              <a href="#"><i class="far fa-chart-bar"></i> Indicares</a>
                        </li>
                        <li>
                              <a href="#"><i class="fas fa-cog"></i> Ajustes</a>
                        </li>
                  </ul>


            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">

                              <button type="button" id="sidebarCollapse" class="navbar-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                              </button>
                              <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                                    data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <i class="fas fa-align-justify"></i>
                              </button>

                              Olá, {{ auth()->user()->name }}
                        </div>
                  </nav>

                  @yield('content')
            </div>

      </div>


      <script src="https://code.jquery.com/jquery-3.3.1.min.js">
      </script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
      </script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="{{ url('painel/js/script.js') }}"></script>
      <script type="text/javascript">
            $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
      </script>
      @if(Session::has('success'))
      <script type="text/javascript">
            Swal.fire({
                   title:'Sucesso!',
                   icon: 'success',
                   text:"{{Session::get('success')}}",
                   timer:5000,
                   type:'success'
               }).then((result) => {
            // Reload the Page
            location.reload();
            });
      </script>
      @endif
</body>

</html>