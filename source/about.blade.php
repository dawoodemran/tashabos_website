@extends('_layouts.main')
@section('body')

<div class="relative min-h-screen"> 
    @include('_partials.header') 

    <div class="bg-gray-100 mt-16">
        <div class="max-w-3xl mx-auto text-center py-20 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-7xl font-tiempos text-gray-800">
            <span class="block">About Us</span>
            </h2>
            <p class="mt-8 text-xl leading-8 text-gray-500">Tashabos, a Dari word meaning “entrepreneurship”, is an online learning community for entrepreneurs in developing countries where millions of emerging entrepreneurs aspire to create businesses of the future today.  </p>
        </div>
        <div class="flex justify-center  mb-0">
            <div class="p-6">
                <img class="" src="{{$page->baseUrl }}/assets/images/about.png" alt="">
            </div>
        </div>
    </div>
</div>


<div class="bg-gray-100 bg-opacity-40 pt-24">
    @include('_partials.footer')
</div>


@endsection