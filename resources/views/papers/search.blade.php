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
        <h1>search</h1>

<form method="GET" action="{{ route('papers.search') }}">
    <input type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>

        <button type="submit">検索</button>
        <button>
            <a href="{{ route('papers.search') }}" class="text-white">
                クリア
            </a>
        </button>
    </div>
</form>

@foreach($papers as $paper)
    <a href='/papers/{{ $paper->id }}'>{{ $paper->title }}</a>
@endforeach

        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>