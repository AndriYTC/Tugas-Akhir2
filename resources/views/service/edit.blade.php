@extends('layout.main')
@section('title', 'Edit Pesanan')
@section('container')
<div class="wrapper">
    <div class="max-w-sm mx-auto mb-8">
        <h1 class="text-3xl font-bold mb-4">Edit Pesanan</h1>
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

        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data"
            onsubmit="return confirm('Are you sure you want to EDIT?');">
            @csrf
            @method('PUT')
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Club</label>
            <input type="title" name="title" value="{{$service->title}}" id="email"
                aria-describedby="helper-text-explanation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Nama Club">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment...">{{$service->description}}</textarea>

            <label for="image" class="block text-sm font-medium text-gray-700">Gambar (opsional)</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md"
                accept="image/*">
            @if ($service->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->title }}"
                        class="w-20 h-20 object-cover">
                </div>
            @endif

            <button type="submit"
                class="py-3 px-5 mt-3 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Edit</button>

            <button
                class="py-3 px-5 mt-3 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"><a
                    href="{{url('services')}}">Kembali</a></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</div>
</div>
@endsection