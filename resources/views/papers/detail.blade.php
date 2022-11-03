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
                    <h2 class='title'>[<a href='/papers/{{ $paper->id }}'>{{ $paper->title }}</a>]</h2>
                </div>
                
 				<!-- お気に入りボタン -->
                <article class="article-item">
                    <div class="article-title"><a href='/papers/{{ $paper->id }}'>{{ $paper->title }}</a></div>
                    <div class="article-info">
                        {{ $paper->created_at }}｜{{ $paper->user }}
                    </div>
                    <div class="article-control">
                        @if (!Auth::user()->is_bookmark($paper->id))
                        <form action="{{ route('bookmark.store', $paper) }}" method="post">
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
                </article>
                
                <form action="/papers/{{ $paper->id }}" id="form_{{ $paper->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $paper->id }})">delete</button> 
                </form>
                
                      <!-- article - start -->
                  <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
                    <div class="flex flex-col gap-2 p-4 lg:p-6">
                      <span class="text-gray-400 text-sm">July 19, 2021</span>
            
                      <h2 class="text-gray-800 text-xl font-bold">
                        <a href='/papers/{{ $paper->id }}' class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">{{ $paper->title }}</a>
                      </h2>
            
                      <p class="text-gray-500">This is a section of some simple filler text, also known as placeholder text.</p>
            
                      <div>
                        <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">Read more</a>
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
        <div class='back'>[<a href='/papers'>back</a>]</div>
    </body>
</html>
</x-app-layout>