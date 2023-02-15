<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">

        <title>Laravel</title>
    </head>
    <body>
        <header>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}">About Us</a>
                </li>
            </ul>
        </header>
        <main>
            <h1>Questi sono i nostri contatti:</h1>
            telefono: {{ $phone }} <br>
            mail: {{ $mail }} <br>
            indirizzo: {{ $adress }}
        </main>
    </body>
</html>