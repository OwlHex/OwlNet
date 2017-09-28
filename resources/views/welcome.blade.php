<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OWL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/frontPage.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div >
                    <img src="/img/logo01.jpg" alt="avatar" name="avatar" class="imageConstruct">
                </div>
                <div>
                    logout
                </div>
                <div class="title m-b-md">
                    Site name  / home button ≧◡≦
                </div>

                <div class="links">
                    <a href="{{ route('SignIn') }}">SignIn</a>
                    <a href="{{ route('SignUp') }}">SignUp</a>
                </div>
                <div>
                    <input type="text" placeholder="search" name="searchInput">
                    <div>
                        username
                        <div>
                            first name
                        </div>
                        <div>
                            last name
                        </div>
                    </div>
                    <div>
                        news
                        <div>
                            general
                            recommend
                            my
                            group
                        </div>
                    </div>
                    <div>
                        login
                    </div>
                    <div>
                        registration
                    </div>

                </div>
                
            </div>
        </div>
    </body>
</html>
