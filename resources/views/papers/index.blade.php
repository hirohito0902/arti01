<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Paper</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
        <h1>home</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>Title</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
        <a href='/papers/bookshelf'>bookshelf</a>
        <a href='/papers/search'>search</a>
        <a href='/papers/submission'>submission</a>
    </body>
</html>
