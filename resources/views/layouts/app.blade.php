<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Karapau</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('app-consultor/css/main.min.css') }}">
</head>
<body>
    <div id="app">
    
        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if(Session::has('success'))
        <script type="text/javascript">
            Swal.fire({
                           title:'Sucesso!',
                           icon: 'success',
                           text:"{{Session::get('success')}}",
                           timer:5000,
                           type:'success'
                       });
        </script>
        @endif
</body>
</html>
