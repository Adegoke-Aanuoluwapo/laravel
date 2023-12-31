@extends('layout')
@section('title', 'Welcome')
@section('content')
       
             @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                
            @endif 

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                 <div class="flex justify-center mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                  <h1>Home</h1>
                </div>

                <div class="mt-8 dark:bg-grey-100 overflow-hidden sm:rounded-lg">
                   <p>This is the Home page.</p>
                </div>
                   
             </div>
@endsection
