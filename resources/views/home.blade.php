@extends('layout.main')
@section('title', 'Home')
@section('container')

<section class="">

    <img class="h-85 w-full " src="{{asset('img/zona.png')}}" alt="image description">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-3 gap-1">
            <div class="w-full dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-3xl mb-4"><b>Temukan Jersey impian anda</b></h2>
                <p class="mb-5">Kami adalah penyedia jersey berkualitas tinggi yang menghadirkan desain unik untuk penggemar sejati.</p>
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a class="no-underline text-white" href="{{route('service')}}">Learn more</a></button>
            </div>    
            <div class="w-80 max-w-sm rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <img src="{{asset('img/jersey.png')}}" alt="jersey.png">
            </div>  
            <div class="h-auto w-80 max-w-sm bg-white rounded-lg dark:bg-gray-800 dark:border-gray-700">
                <img src="{{asset('img/jersey2.png')}}" alt="jersey2.png">
            </div>     
        </div>
    </div>




</section>





<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection