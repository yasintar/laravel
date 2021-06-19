<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 50;
                height: 100vh;
                margin: 0;
            }
            p {
                border-right: solid 3px #888;
                white-space: nowrap;
                overflow: hidden;    
                font-family: 'Source Code Pro', monospace;  
                font-size: 28px;
                color: #888;
                }

                /* Animation */
                p {
                animation: animated-text 4s steps(29,end) 1s 1 normal both,
                            animated-cursor 600ms steps(29,end) infinite;
                }

                /* text animation */

                @keyframes animated-text{
                from{width: 0;}
                to{width: 472px;}
                }

                /* cursor animations */

                @keyframes animated-cursor{
                from{border-right-color: #888;}
                to{border-right-color: transparent;}
                }

            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 50px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/home') }}">Hello World</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                    <p>It's time to "Hello, world!" :)</p>
                    
                </div>
            </div>
        </div>
    </body>
</html>
