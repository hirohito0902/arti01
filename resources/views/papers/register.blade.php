<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Paper</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>register</h1>
        <div class='posts'>
            <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>user registration</h2>
                <input type="text" name="post[title]" placeholder="your e-mail address"/>
                <input type="text" name="post[title]" placeholder="your password"/>
            </div>
            <input type="submit" value="store"/>
           </form>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
