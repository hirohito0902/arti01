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

        <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">論文管理サイト</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">論文管理サイトでは論文の登録、管理などができます</p>
    </div>
    <!-- text - end -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 md:gap-6 xl:gap-8">
      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://www.silhouette-illust.com/wp-content/uploads/2016/06/3297-101x101.jpg" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">July 19, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="/papers/bookshelf" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">本棚</a>
          </h2>

          <p class="text-gray-500">お気に入り登録した論文を一覧できます</p>
          
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://www.silhouette-illust.com/wp-content/uploads/2016/05/650-101x101.jpg" loading="lazy" alt="Photo by Lorenzo Herrera" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">April 07, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="/papers/search" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">検索</a>
          </h2>

          <p class="text-gray-500">論文の検索ができます</p>
          
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://www.silhouette-illust.com/wp-content/uploads/2016/10/13819-101x101.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">March 15, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="/papers/submission" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">提出</a>
          </h2>

          <p class="text-gray-500">論文の登録ができます</p>

        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://www.silhouette-illust.com/wp-content/uploads/2017/03/icon_tool_26623-101x101.jpg" loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">January 27, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="/papers" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">Coming soon...</a>
          </h2>

          <p class="text-gray-500">追加機能を実装予定</p>

         
        </div>
      </div>
      <!-- article - end -->
    </div>
  </div>
</div>

    </body>
</html>
</x-app-layout>