<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　INDEX
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Paper</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
        <h1>paper share site</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>home</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
        <a href='/papers/bookshelf'>bookshelf</a>
        <a href='/papers/search'>search</a>
        <a href='/papers/submission'>submission</a>
        <a href='/papers/register'>register</a>
    </body>
</html>
</x-app-layout>