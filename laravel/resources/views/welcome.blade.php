<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Libreman-Report</title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet"> 


        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: rgb(0,95,255);
                background: linear-gradient(180deg, rgba(0,95,255,1) 0%, rgba(0,27,71,1) 50%, rgba(65,0,0,1) 50%, rgba(255,0,0,1) 100%); 
                background-repeat: no-repeat;
                background-size: 100% auto;
                background-position: center top;
                background-attachment: fixed;
            
            }

            .title {
                color: white;
                font-size: 300%;
                font-family: 'Roboto Serif', sans-serif;
                font-weight: bold;
                text-shadow: .05em .05em 0 rgb(0, 0, 0)
            }

            .xy-center {
                position: absolute;
                top: 48%;
                left: 50%;
                -moz-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
            }

            .xy-left {
                position: absolute;
                top: 50%;
                left: 20%;
                -moz-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
            }

            .xy-right {
                position: absolute;
                top: 50%;
                left: 80%;
                -moz-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
            }
        </style>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            

            <img class="xy-left" style="width: 15%;" src="{{ asset('storage/symbols/Russia.png') }}" alt="">

            <img class="xy-right" style="width: 10%;" src="{{ asset('storage/symbols/Ukraine.png') }}" alt="">


            <a href="{{ route('reports') }}">
                <h1 class="xy-center title" onmouseover="increaseFont(this)" onmouseout="decreaseFont(this)">Libreman-Report</h1>
            </a>
        </div>

        {{-- Use this to increase the size of the font when the user curors in --}}
        <script>
            function increaseFont(x) {
                x.style.fontSize  = "350%";
            }

            function decreaseFont(x) {
                x.style.fontSize = "300%";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
