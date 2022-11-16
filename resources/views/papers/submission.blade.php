<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
 
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Paper submission</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="mb-10 md:mb-16">
             <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">論文投稿</h2>
        </div>
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative ml-5 mr-5 mt-3" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div>
            <form method="post" action="{{ route('file_upload.action') }}" enctype="multipart/form-data">
                @csrf
                <div class="m-5 text-center">
                    <div>
                        <input type="file" name="upload_file" class="mb-5" />
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">送信</button>
                </div>
                @csrf
                <!-- question - start -->
                <div>
                <div class="border-b w-1/4 mx-auto flex flex-col">
                    <div class="mb-1.5">
                       <label for="title">題名</label>     
                       <input id="title" type="text" name="title" placeholder="タイトル">
                    </div>
                    <div class="mb-1.5">
                       <label for="author">著者</label>     
                       <input id="author" type="text" name="author" placeholder="著者">
                    </div>
                    <div class="mb-1.5">
                       <label for="year">年度</label>     
                       <input id="year" type="month" name="year" placeholder="年度">
                    </div>
                   <div class="mb-1.5">
                       <label for="degree" id="degree">学位</label> 
                       @csrf
                       {{Form::select('degree', ['学士' => '学士', '修士' => '修士', '博士' => '博士', 'その他' => 'その他'])}}
                       
                   </div>
                   <div class="mb-1.5">
                       @csrf
                       <label for="category" id="category">分野</label>     
                       {{Form::select('category', ['AR/VR/MR' => 'AR/VR/MR', 'visual slam' => 'visual slam', '機械学習' => '機械学習', 'パターン認識' => 'パターン認識', '自立移動ロボット' => '自立移動ロボット', 'その他' => 'その他'])}}
                       
                   </div>
                
                </div>
            </form>
        </div>
            
        <button class="rounded bg-gray-300 px-4 py-2">
            <a href='/papers'>戻る</a>
        </button>

    </body>
</html>
</x-app-layout>
