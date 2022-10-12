<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　INDEX
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>detail</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
        <h1>detail site</h1>
        <div class='posts'>
            @foreach ($papers as $paper)
                <div class='post'>
                    <h2 class='title'>{{ $paper->title }}</h2>
                    <a href={{ $paper->path }} class='path'>{{ $paper->path }}</a>
                </div>
            @endforeach
        </div>
        <a href='/papers/detail/1'>pdfファイルはこちら</a>
        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>