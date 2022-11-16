<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        　
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Paper</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
    </head>
    <body class="antialiased">
        <div class="mb-10 md:mb-16">
          <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">論文検索</h2>
        </div>
        
        <div class='text-center'>
        <form method="GET" action="{{ route('papers.search') }}">
            <input class="mb-1.5 border-b w-1/4 mx-auto flex flex-col" type="search" placeholder="キーワードを入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <div class="justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">検索</button>
                <button>
                    <a href="{{ route('papers.search') }}" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>
        </div>

        <div class='posts'>
            @foreach ($papers as $paper)
            
                      <!-- article - start -->
                  <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
                    <div class="flex flex-col gap-2 p-4 lg:p-6">
                      <span class="text-gray-400 text-sm">July 19, 2021</span>
            
                      <h2 class="text-gray-800 text-xl font-bold">
                        <a href='/papers/{{ $paper->id }}' class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">{{ $paper->title }}</a>
                      </h2>
                      
                      <div class="article-info">
                        {{ $paper->created_at }}｜{{ $paper->user }}
                      </div>
                      
                        <div>
                            @if (!Auth::user()->is_bookmark($paper->id))
                            <form action="{{ route('bookmark.store', $paper) }}" method="post" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">
                                @csrf
                                <button>お気に入り登録</button>
                            </form>
                            @else
                            <form action="{{ route('bookmark.destroy', $paper) }}" method="post">
                                @csrf
                                @method('delete')
                                <button>お気に入り解除</button>
                            </form>
                            @endif
                        </div>
                        
                        <div class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">
                        <form action="/papers/{{ $paper->id }}" id="form_{{ $paper->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $paper->id }})">delete</button> 
                        </form>
                        </div>
                    </div>
                  </div>
                  <!-- article - end -->
           
            @endforeach
            <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                    
                }
                }
                
            </script>
    
        </div>
        
        <div class='paginate'>
            {{ $papers->links() }}
        </div>
        
        <button class="rounded bg-gray-300 px-4 py-2">
            <a href='/papers'>戻る</a>
        </button>
    </body>
</html>
</x-app-layout>