@extends('layout.main')
@section('title', 'About')
@section('container')
    

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-400 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">About Me</h2>
                <p class="text-lg font-normal text-gray-900 dark:text-gray-400 mb-4">Saya Seorang pelajar yang masih mempelajari beberapa bahasa pemrograman</p>
            </div>
            <div class="bg-gray-400 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Cita-Cita</h2>
                <p class="text-lg font-normal text-gray-900 dark:text-gray-400 mb-4">Saya bercita-cita memiliki usaha sendiri dan bisa membahagiakan orang tua</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection