@include('user_block')



<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OWL</title>
        <link rel="stylesheet" href="css/frontPage.css">
    </head>
    <body>
        <div class="top-menu ">
            <div class="menu main-center">
                <div class="links top-margin text-regular ">
                    <a href="{{ url('/') }}">OwlNet</a>
                    <a href="{{ route('logout') }}">logout</a>
                    <a href="{{ route('SignIn') }}">login</a>
                    <a href="{{ route('Registration') }}">registration</a>
                    <a href="{{ route('News') }}">news</a>
                    <a href="{{ route('gallery') }}">gallery</a>
                    
                    <input type="search" placeholder="search" name="searchInput" id="input-field" class="text-regular">
                </div>
            </div>

        </div>
        <!-- main -->
        <div class="wrapper ">
            <div class="main-center">

            <div class="leftcolumn">
                @yield('user_block')
                

            </div>
            <div class="rightcolumn"> 
            @yield('gallery')   
            @yield('post')
            @yield('news') 
            @yield('Registration')
            @yield('login')
            @yield('avatar_edit')

                                      
                </div>                
            </div>
            </div>
        </div>

        

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/filleLoad.js"></script>
    </body>
</html>
