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
        <h1 class="mt-8 flex items-center justify-center text-gray-700">paper share site</h1>
        <div class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            <div class='post'>
                <h2 class='title'>home</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
        <a href='/papers/bookshelf'>bookshelf</a>
        <a href='/papers/search'>search</a>
        <a href='/papers/submission'>submission</a>
        <a href='/papers/register'>register</a>
        
        <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Blog</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
    </div>
    <!-- text - end -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 md:gap-6 xl:gap-8">
      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">July 19, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">New trends in Tech</a>
          </h2>

          <p class="text-gray-500">This is a section of some simple filler text, also known as placeholder text.</p>

          <div>
            <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">Read more</a>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">April 07, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">Working with legacy stacks</a>
          </h2>

          <p class="text-gray-500">This is a section of some simple filler text, also known as placeholder text.</p>

          <div>
            <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">Read more</a>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">March 15, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">10 best smartphones for devs</a>
          </h2>

          <p class="text-gray-500">This is a section of some simple filler text, also known as placeholder text.</p>

          <div>
            <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">Read more</a>
          </div>
        </div>
      </div>
      <!-- article - end -->

      <!-- article - start -->
      <div class="flex flex-col md:flex-row items-center border rounded-lg overflow-hidden">
        <a href="#" class="group w-full md:w-32 lg:w-48 h-48 md:h-full block self-start shrink-0 bg-gray-100 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col gap-2 p-4 lg:p-6">
          <span class="text-gray-400 text-sm">January 27, 2021</span>

          <h2 class="text-gray-800 text-xl font-bold">
            <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">8 High performance Notebooks</a>
          </h2>

          <p class="text-gray-500">This is a section of some simple filler text, also known as placeholder text.</p>

          <div>
            <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-semibold transition duration-100">Read more</a>
          </div>
        </div>
      </div>
      <!-- article - end -->
    </div>
  </div>
</div>
    </body>
</html>
</x-app-layout>