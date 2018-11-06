@include('layouts.header')

@include('layouts.top-bar')

@include('layouts.main-header')


<!--  
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">-->

                    <!-- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->

                    <!-- Branding Image 
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">-->
                    <!-- Left Side Of Navbar 
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    
                    </ul>
                </div>
            </div>
        </nav>-->

        @yield('content')
    
    </div>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}"></script>-->

@include('layouts.footer')