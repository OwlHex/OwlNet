<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OWL</title>

        <link rel="stylesheet" href="css/frontPage.css">
        {{--<link href="css/clean-blog.min.css" rel="stylesheet">--}}
        {{--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
        <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->

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
                    
                    <input type="search" placeholder="search" name="searchInput" id="input-field" class="text-regular">
                </div>
            </div>

        </div>
        <div class="wrapper ">
            <div class="main-center">



            <div class="leftcolumn">

                <div class="user-block container clearfix" >

                    <img src="/img/logo02.png" alt="avatar" name="avatar" class="imageConstruct">
                    <div class="floatbox ">

                        <div class="text-box ">
                            Username
                        </div>
                        <div class="text-box">
                            first name
                        </div>
                        <div class="text-box">
                            last name
                        </div>
                        <div class="text-box">
                            age
                        </div>
                        <div class="text-box">
                            gender
                        </div>
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
            </div>
            <div class="rightcolumn">
                <div class="post text-regular">
                    <div class="container clearfix">
                        <img src="/img/logo03.png" alt="avatar" name="avatar" class="imagePost">
                        <div class="post-lable">
                            topic
                            group name
                            user name
                            date
                        </div>
                    </div>
                    <div class="post-content">
                        <p>
                            hello! first post!!
                            hello! first post!!
                            hello! first post!!
                            hello! first post!!
                            hello! first post!!hello! first post!!hello! first post!!
                            hello! first post!!hello! first post!!
                            hello! first post!!
                            hello! first post!!
                            hello! first post!!hello! first post!!hello! first post!!
                            hello! first post!!hello! first post!!hello! first post!!
                            hello! first post!!hello! first post!!
                        </p>
                    </div>

                    <div class="tegs">
                        tegs hiden
                        <button type="button" class="buttonViwe align-right">comment</button>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/clean-blog.min.js"></script>
    </body>
</html>
