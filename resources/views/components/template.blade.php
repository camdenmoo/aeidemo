<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paradis Music</title>

    {{-- Srcipts --}}
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>

    <script src="{{asset('/js/custom.js?t='.time())}}" defer=""></script>


    {{-- Styles --}}
    <link rel="stylesheet" href="{{asset('/css/custom.css?t='.time())}}">

    
</head>
<body>
    <header>
        <div class="container">
            <div class="site-logo">
                <h1>
                    <a href="/">Paradise Music</a>
                </h1>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="/">Database</a>
                    </li>
                    <li>
                        <a href="/command-line">Command line</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="wrapper">
                {{$slot}}
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            Paradise Records &copy; 2022
        </div>
    </footer>
</body>
</html>