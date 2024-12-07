@extends('layout.main')
@section('title', 'Daftar Saran')
@section('container')


<div class="relative px-6 m- sm:rounded-lg">
    <h1 class="text-center text-5xl mb-5 ">Daftar Saran</h1>
    <table class="w-full text-sm border rounded-lg">
        <thead class="text-xs text-white uppercase bg-gray-900">
            <tr>
                <th scope="col" class="px-3 py-3 bg-blue-200 text-gray-900">
                    Email
                </th>
                <th scope="col" class="px-6 py-9 bg-blue-200 text-gray-900">
                    Pesan
                </th>
                <th scope="col" class="px-4 py-3 bg-blue-200 text-gray-900">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="text-gray-900 border-collapse">
                    <th class="px-6 py-4 font-medium">
                    {{ $post->title}}
                    </th>
                    <td class="px-6 py-4 font-medium">
                    {{ $post->body }}
                    </td>
                    <td class="flex items-center ml-10 py-4">
                        <form method="POST" action="{{url('daftar-saran', $post->id)}}" onsubmit="return confirm('Are you sure you want to DELETE?');">
                        @csrf
                        @method('DELETE')    
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700">Hapus</button>
                        </form>

                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection