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
            .box-text{
                display: flex;
                justify-content: flex-end;
                margin-right: 1%;
                margin-top: 1%;
            }
            #about{
                margin-right: 20px;
                color: white;
                text-decoration-line: none;
                font-size: 18px;
            }
            #contact{
                color: white;
                text-decoration-line: none;
                font-size: 18px;
            }
            #login{
                color: white;
                text-decoration-line: none;
                font-size: 18px;

            }
            #reg{
                margin-left: 20px;
                color: white;
                text-decoration-line: none;
                font-size: 18px;

            }
            #text{
                font-size: 25px; 
                color:#ff8e01;
                margin-right: 68%;
            }
        </style>

</head>
<body style="background-color: #000211" class="antialiased">
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
    </body>
</html>
