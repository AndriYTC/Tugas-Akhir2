@extends('layout.main')
@section('title', 'Buat Pesanan')
@section('container')
<div class="wrapper">
    <div class="max-w-sm mx-auto mb-8">
        <h1 class="text-3xl font-bold mb-4">Buat Pesanan</h1>
        @if (session('success'))
            <div class="alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Club</label>
            <input type="title" name="title" value="{{old('title')}}" id="title"
                aria-describedby="helper-text-explanation"
                class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Zona Jersey">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="contoh => warna : hitam,nomor : 1">{{old('body')}}</textarea>

            <label class="block mt-3 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Desain</label>
            <input id="image" name="image" for="image"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">


            <button type="submit"
                class="py-3 px-5 mt-3 mr-2 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Buat
                Pesanan</button>
            <button type="reset"
                class="py-3 px-5 mt-3 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Batal</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    </div>

</div>
@endsection