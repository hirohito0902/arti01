<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>detail</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body>
        <div class="mb-10 md:mb-16">
          <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">論文詳細</h2>
        </div>
        
        <div class="text-gray-800 text-1x1 lg:text-2xl font-bold justify-center flex">
            <h1 class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">タイトル：{{ $paper->title }}</h1>
        </div>
        <div class="text-gray-800 text-1x1 lg:text-2xl font-bold justify-center flex">
            <h1 class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">著者：{{ $paper->author }}</h1>
        </div>
        <div class="text-gray-800 text-1x1 lg:text-2xl font-bold justify-center flex">
            <h1 class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">投稿年度：{{ $paper->year }}</h1>
        </div>
        <div class="text-gray-800 text-1x1 lg:text-2xl font-bold justify-center flex">
            <h1 class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">学位：{{ $paper->degree }}</h1>
        </div>
        <div class="mb-3 text-gray-800 text-1x1 lg:text-2xl font-bold justify-center flex">
            <h1 class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">分野：{{ $paper->category }}</h1>
        </div>
        
        
    
        <!-- buttons - start -->
        <div class="mb-2 flex gap-2.0 justify-center">
            <a href="{{ $paper->path }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">PDFファイルはこちら</a>
        </div>
        <!-- buttons - end -->
            
        <button class="rounded bg-gray-300 px-4 py-2">
            <a href='/papers'>戻る</a>
        </button>
    </body>
</html>
</x-app-layout>