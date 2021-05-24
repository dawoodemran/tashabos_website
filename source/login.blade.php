@extends('_layouts.main')
@section('body')

<div class="relative min-h-screen"> 
    @include('_partials.header') 

    <div class="bg-gray-100 mt-20">
        <div class="max-w-3xl mx-auto text-center py-20 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-tiempos text-gray-800">
            <span class="block">Login</span>
            </h2>
        </div>
        <div class="flex">
            <div class="mx-auto sm:w-10/12 md:w-6/12 lg:w-5/12">
                <h1 class="text-2xl font-boald mb-4">Please login to your account</h1>
                <div class="sm:col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="organization" class="py-3 px-4 border border-gray-400 focus:outline-none focus:border-current focus:ring-current block w-full rounded-lg" placeholder="Username">
                    </div>
                </div>

                <div class="sm:col-span-2 mt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" autocomplete="organization" class="py-3 px-4 border border-gray-400 focus:outline-none focus:border-current focus:ring-current block w-full rounded-lg" placeholder="password">
                    </div>
                </div>
                <a href="{{ $page->baseUrl }}/"><button class="w-full focus:outline-none bg-current hover:bg-transparent text-white font-semibold py-3 px-6 uppercase rounded-lg mt-5">LOGIN</button></a>
            </div>
        </div>
    </div>
</div>
<div class="">
    @include('_partials.footer')
</div>


@endsection