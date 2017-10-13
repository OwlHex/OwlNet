@include('user_block')



<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</title>
        <link rel="stylesheet" href="css/frontPage.css">
    </head>
    <body>
        <div class="top-menu ">
            <div class="menu main-center">
                <div class="links top-margin text-regular ">
                    <a href="{{ url('/') }}">OwlNet</a>
                    {{--<a href="{{ route('logout') }}">logout</a>--}}
                    {{--<a href="{{ route('avatarEdit') }}">avatarEdit</a>--}}
                    
                    {{--<a href="{{ route('register') }}">registration</a>--}}
                    <a href="{{ route('News') }}">news</a>
                    <a href="{{ route('gallery') }}">gallery</a>
                    
                    <input type="search" placeholder="search" name="searchInput" id="input-field" class="text-regular">
                </div>
            </div>

        </div>
        <!-- auth laravel -->
        <!-- https://laravel-news.com/authorization-gates -->
        <!-- https://scotch.io/tutorials/user-authorization-in-laravel-54-with-spatie-laravel-permission -->

     <!--    public function boot(Guard $auth)
            {
                dd($auth->user()); // null
    
                    view()->composer('partials.nav', function($view) use ($auth){
                    dd($auth->user()); // returns User object
                    $view->with('currentUser', $auth->user()); // does what you expect
                });
            } -->
            <!-- Auth::user()->id -->
            <!-- https://www.youtube.com/watch?v=3GwUarZmnOI&list=PLZU0qJlzY07WNbXipe1R8lUI-QLhGzwnt&t=231 -->

            <!-- gender first name last name age role -->

        {{--<div>--}}
            {{--@if (Route::has('login'))--}}
                    {{--<div class="top-right links">--}}
                        {{--@auth--}}
                            {{--<a href="{{ url('/home') }}">Home</a>--}}
                        {{--@else--}}
                            {{--<a href="{{ route('login') }}">Login</a>--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endauth--}}
                    {{--</div>--}}
                {{--@endif--}}
        {{--</div>--}}
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
            {{--@yield('login')--}}
            @yield('avatar_edit')

                                      
                </div>                
            </div>
            </div>
        </div>

        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"></script> -->

        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/filleLoad.js"></script>
        <script src="js/editProfile.js"></script>
    </body>
</html>
