<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uas_Laravel</title>

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" >
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
       <div class="container-fluid" style="min-height: 768px;">
           <div class="row">
               <!-- side navbar -->
               <div class="col-md-2 h-100 px-0" data-toggle="nav-1" style="min-height: 768px; background-color:#072049"> 
                    <nav class="navbar navbar-expand col-md-12 w-100 h-100 navbar-dark sticky-top " style="background-color:#072049;">
                        <ul class="nav flex-column">
                            <div class="container" style="background-color:#072049;">
                                <div class="row justify-content-center py-1">
                                    <a href="{{ url('/') }}" class="navbar-brand text-center">{{ __('Admin Panel')}}</a>
                                </div>
                            </div>
                            <form action="" class="form-control-inline-block py-2">
                                <input type="search" class="form-control text-light" placeholder="search" style="background-color:#072049;">
                            </form>
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link collapsed dropdown-toggle" data-toggle="collapse" data-target="#gudang" role="button" aria-expanded="false" aria-controls="collapseCreate">{{ __('Create New') }}</a>
                            </li>
                            <ul class="nav flex-column collapse shadow" id="gudang">
                                <li class="nav-item">
                                    <a href="{{ route('add_gudang') }}" class="nav-link">{{ __('Tambah Gudang') }}</a>
                                    <a href="{{ route('add_barang') }}" class="nav-link">{{ __('Tambah Barang') }}</a>
                                </li>
                            </ul>
                            <li class="nav-item">
                                <a href="{{ route('all_gudang') }}" class="nav-link">{{ __('Gudang') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('all_barang') }}" class="nav-link">{{ __('Barang') }}</a>
                            </li>
                        </ul>
                    </nav>
               </div>

               <!-- main content area -->
               
               <div class="col-12 col-md-10 col-xs-10 px-0" id="main">
                   <nav class="navbar navbar-expand-sm navbar-light navbar-laravel sticky-top">
                        <div class="container">
                            <a class="navbar-brand">Dashboard  @yield('title')</a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="navbar-nav ml-auto">
                                    <button type="button" class="btn btn-primary btn-sm mr-sm-2">Masuk</button>
                                    <button type="button" class="btn btn-primary btn-sm mr-sm-2">Logout</button>
                                </div>
                            </div>
                        </div>
                   </nav>
                   @include('alert.index')
                   @yield('content')
               </div>

               <!-- footer -->
               <div class="col-md-2 col-xs-2 px-0" data-target="nav-1" style="background-color:#072049;"></div>
               <div class="col-12 col-md-10 col-xs-10 px-0">
                   <nav class="navbar navbar-exapnd-sm navbar-laravel bg-primary">
                        <div class="container justify-content-center">
                            <span class="text-center text-light">Copyright &copy; 2018</span>
                        </div>
                   </nav>
               </div>
           </div>
       </div>

    </body>
</html>
