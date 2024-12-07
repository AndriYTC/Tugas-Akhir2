@extends('layout.main')
@section('title','Saran')
@section('container')

<form action="{{route('saran')}}" method="POST" class="max-w-sm mx-auto mb-8"> 
  @csrf
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
  <input type="title" name="title" value="{{old('title')}}" id="email" aria-describedby="helper-text-explanation" class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com">
  @error('title')
  <div class="invalid-feedback">{{$message }}</div>
  @enderror

  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
  <textarea id="body" name="body" rows="4" class="@error('body') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{old('body')}}</textarea>
  @error('body')

  <div class="invalid-feedback">{{$message }}</div>
  @enderror

  <button type="submit" class="py-3 px-5 mt-3 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim Pesan</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection