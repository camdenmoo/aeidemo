<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paradis Music</title>
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
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
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/something-else">Something else</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            {{$slot}}
        </div>
    </main>

    <footer>
        <div class="container">
            Paradies Records &copy; 2022
        </div>
    </footer>
</body>
</html>