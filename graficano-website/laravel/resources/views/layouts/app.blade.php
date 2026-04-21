<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Graficano') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon-1.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon-1.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon-1.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon-1.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>




</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Graficano') }} Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('banner.banner.index') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Banners<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('banner.banner.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('banner.banner.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('blogs.blog.index') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Blogs<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('blogs.blog.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('blogs.blog.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('clients.client.index') }}" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Clients<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('clients.client.index') }}">
                                        View All
                                    </a>
                                    <a class="dropdown-item" href="{{ route('clients.client.create') }}">
                                        Add New
                                    </a>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('portfolios.portfolio.index') }}" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Portfolio <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('portfolios.portfolio.index') }}">
                                        View All
                                    </a>
                                    <a class="dropdown-item" href="{{ route('portfolios.portfolio.create') }}">
                                        Add new
                                    </a>


                                </div>
                            </li> 
                            
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('portfolios.reviews') }}" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Portfolio Reviews <span class="caret"></span>
                                </a>
                            </li> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('events.event.index') }}" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Event <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('events.event.index') }}">
                                        View All
                                    </a>
                                    <a class="dropdown-item" href="{{ route('events.event.create') }}">
                                        Add new
                                    </a>


                                </div>
                            </li>
                            <li class="nav-item dropdown">
                            <a id="navbarDropdownTeam" class="nav-link dropdown-toggle" href="{{ route('teams.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Team <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownTeam">
                                <a class="dropdown-item" href="{{ route('teams.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('teams.create') }}">
                                    Add New
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('instagram.instagram.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Instagram Posts<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('instagram.instagram.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('instagram.instagram.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('production_order.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Production Order<span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('production_order.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('production_order.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('all-services') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Services <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('all-services') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('create-service') }}">
                                    Add New
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('all-sub-services') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Sub Services <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('all-sub-services') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('sub-service.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('department.department.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Services Post<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('department.department.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('department.department.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('career.index') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Careers<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('career.index') }}">
                                    View All
                                </a>
                                <a class="dropdown-item" href="{{ route('career.create') }}">
                                    Add New
                                </a>

                            </div>
                        </li>

                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div> --}}
                            </li> -->
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
   
   <script defer type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <script defer type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- ckeditor js-->
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
   <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    @yield('specificscripts')
</body>

</html>
