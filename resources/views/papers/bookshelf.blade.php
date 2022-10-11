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
        <h1 class="text-red-600">bookshelf</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>papers list</h2>
                <select name="paper">
                    <option value="paper1">paper1</option>
                    <option value="paper2">paper2</option>
                    <option value="paper3">paper3</option>
                    <option value="paper4">paper4</option>
                    <option value="paper5">paper5</option>
                </select>
            </div>
        </div>
        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>
