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
        <h1>submission</h1>
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative ml-5 mr-5 mt-3" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('file_upload.action') }}" enctype="multipart/form-data">
            @csrf
            <div class="m-5">
                <div>
                    <input type="file" name="upload_file" class="mb-5" />
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">送信</button>
            </div>
        </form>
        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>