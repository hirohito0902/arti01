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
    <body>
        <h1>detail site</h1>
        <div class='posts'>
    
                <div class='post'>
                    <h1 class='title'>{{ $paper->title }}</h1>
                    <a href={{ $paper->path }} class='path'>pdfファイルはこちら</a>
                </div>

        </div>
        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>