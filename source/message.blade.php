@extends('_layouts.main')
@section('body')



<div class="relative min-h-screen"> 
    @include('_partials.header') 

    <div class="bg-gray-100 ">
        <div class="max-w-3xl mx-auto flex justify-center text-center py-20 px-4 sm:py-20 sm:px-6 lg:px-8">
            <div class="flex-col flex items-center justify-center">
                <div class="rounded-full w-72 h-72 bg-white flex justify-center items-center ">
                    <svg class="text-transparent text-7xl w-60" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="mt-10">
                    <h1 class="text-2xl font-boald mb-4">Thank you for <b>registration</b></h1>
                    <p class="mt-4 text-xl leading-8 text-gray-500">please wait for your account credentials</p>
                    <p class="text-xl leading-8 text-gray-500">in <span class="text-gray-800" >48 hours</span></p>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="">
    @include('_partials.footer')
</div>


@endsection