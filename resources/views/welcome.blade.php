<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
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
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .btn-3d-1111 {
            border-radius: 2px;
            font-size: 0.9rem;
            padding: 6px 12px;
        }

        .btn-3d-1 {
            position: relative;
            background: orangered;
            border: none;
            color: white;
            padding: 15px 2px;
            font-size: 1.4rem;
            box-shadow: -6px 0 hsl(16, 100%, 30%);
            outline: none;
        }

        .btn-3d-1:hover {
            background: hsl(16, 100%, 45%);
        }

        .btn-3d-1:active {
            background: hsl(16, 100%, 40%);
            top: 3px;
            left: -3px;
            box-shadow: -3px 3px 0 hsl(16, 100%, 30%);
        }

        .btn-3d-1::before {
            position: absolute;
            display: block;
            content: "";
            height: 0;
            width: 0;

            border: solid 6px transparent;
            border-right: solid 6px hsl(16, 100%, 30%);
            border-left-width: 0;
            top: 0;
            left: -6px;
        }


        .btn-3d-2 {
            position: relative;
            background: #edc300;

            background: -webkit-radial-gradient(hsl(54, 100%, 50%), hsl(54, 100%, 40%));
            background: -o-radial-gradient(hsl(54, 100%, 50%), hsl(54, 100%, 40%));
            background: -o-radial-gradient(hsl(54, 100%, 50%), hsl(54, 100%, 40%));

            font-size: 1.4rem;
            text-shadow: 0 -1px 0 #c3af07;
            color: white;
            border: solid 1px hsl(54, 100%, 20%);
            border-radius: 100%;
            height: 120px;
            width: 120px;
            z-index: 4;
            outline: none;
        }

        @media screen {
            #print {
                display: none;
            }
        }

        @media print {
            body * {
                visibility:hidden;
            }
            #print, #print * {
                visibility:visible;
            }
            #print {
                position:absolute;
                left:0;
                top:0;
            }
        }


    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div>
        test code here for Gary ....
        <br/>
        <button type="button" name="button" class="btn-3d-1">First Button 1</button>
        <button type="button" name="button" class="btn-3d-2" onclick="winPrint">Second Button</button>
    </div>
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/JavaScript">

    // Function returns the product of a and b
    function winPrint() {
        const modal = document.getElementById("content")
        const cloned = modal.cloneNode(true)
        let section = document.getElementById("print")

        if (!section) {
            section = document.createElement("div")
            section.id = "print"
            document.body.appendChild(section)
        }

        section.innerHTML = "";
        section.appendChild(cloned);
        window.print();
        section.removeChild(cloned);
    }
</script>
