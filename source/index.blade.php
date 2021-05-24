@extends('_layouts.main')
@section('body')

<div class="relative min-h-screen flex flex-col"> 
    @include('_partials.header') 

    <div class="bg-gray-100 mt-16">
        <div class="max-w-3xl mx-auto text-center py-20 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-7xl font-tiempos text-gray-800">
            <span class="block">We are here to help</span>
            <span class="block">entrepreneurs</span>
            </h2>
            <p class="mt-8 text-xl leading-8 text-gray-500">Hey, welcome to Tashabos. We are here to help entrepreneurs scale their business by learning the art and science of starting, sustaining, growing, and even exiting it. You’ll learn from professionals and entrepreneurs themselves. We promise! It’ll be all worth it. Come on in, sign up.  to See you on the other side. </p>
            <a href="{{ $page->baseUrl }}/register" class="mt-8 uppercase w-full inline-flex items-center justify-center px-14 py-5 bg-current text-base font-medium rounded-xl text-white hover:bg-transparent sm:w-auto">
            Register company
            </a>
        </div>
    </div>

    <div class="py-16 sm:py-24">
        <div class="relative sm:py-16">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="relative rounded-2xl px-6 py-10 bg-white overflow-hidden sm:px-12 sm:py-20">
                <div class="relative">
                <div class="sm:text-center">
                    <h2 class="text-4xl font-tiempos text-gray-800 tracking-tight sm:text-4xl">
                    Subscribe for news and update
                    </h2>
                    <p class="mt-8 mx-auto max-w-xl text-xl leading-8 text-gray-500"> Please leave your email address, and we endeavour to facilitate a free consultation with our experts within 48 hours. </p>
                </div>
                <form action="#" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                    <div class="min-w-0 flex-1">
                    <label for="cta_email" class="sr-only">Email address</label>
                    <input id="cta_email" type="email" class="block w-full bg-gray-100 hover:bg-gray-200 rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2" placeholder="Enter your email">
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-3">
                    <button type="submit" class="block w-full rounded-md px-4 py-3 text-gray-100 font-medium bg-current hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-white sm:px-10">SUBSCRIBE</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@include('_partials.footer')
</div>


@endsection
