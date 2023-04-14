<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Day's Manager</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body{
                background-color: #000211
            }
            .box-text{
                display: flex;
                justify-content: flex-end;
                margin-top: 2%;
            }
            #about{
                margin-right: 20px;
                color: white;
                text-decoration-line: none;
                font-size: 18px;
                font-weight: bold;
            }
            #contact{
                color: white;
                text-decoration-line: none;
                font-size: 18px;
                font-weight: bold;
            }
            #login{
                margin-right: 20px;
                color: white;
                text-decoration-line: none;
                font-size: 18px;
                font-weight: bold;
            }
            #reg{
                margin-right: 20px;
                color: white;
                text-decoration-line: none;
                font-size: 18px;
                font-weight: bold;
                
            }
            #text{
                font-size: 25px; 
                color:#ff8e01;
                margin-right: 65%;

            }
            h1{
                color: white;
                text-align: center;
                font-size: 70px;
                font-weight: bold;
                margin-top: 5%;
            }
            h3{
                color: white;
                text-align: center;
                font-weight: normal;

            }
        </style>

</head>
<body class="antialiased">
    <div class="box-text">
        <strong id="text">DAY'S MANAGER</strong>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"  id="about" >About Us</a>

                        <a href="{{ route('register') }}" id="contact" style="margin-right: 20px;">Contact</a>
                    
                        <a href="{{ route('login') }}" id="login" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" id="reg" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <h1>WELCOME</h1>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit eaque doloremque nemo, labore voluptatum quam quod fuga corrupti alias ab natus illum provident ipsum quisquam quae dignissimos temporibus illo magni!</h3>
    </body>
</html>
