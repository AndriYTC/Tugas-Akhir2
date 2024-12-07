@extends('layout.main')
@section('title', 'Buat Pesanan')
@section('container')
    <div class="container mt-4">
        <h1 class="text-3xl font-bold mb-5">Buat Pesanan</h1>
        <a href="{{ route('services.create') }}" class="mb-5 bg-blue-500 text-white px-4 py-2 rounded">Buat Pesanan</a>
    
        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded my-4">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="mt-5 min-w-full border-collapse border border-gray-900">
            <thead>
                <tr>
                    <th class="border border-gray-900 p-5">Nama Club</th>
                    <th class="border border-gray-900 p-5">Deskripsi</th>
                    <th class="border border-gray-900 p-5">Desain</th>
                    <th class="border border-gray-900 p-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td class="border border-gray-900 p-5">{{ $service->title }}</td>
                        <td class="border border-gray-900 p-5">{{ $service->description }}</td>
                        <td class="border border-gray-900 p-5">
                            @if ($service->image)
                                <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->title }}"
                                    class="w-40 h-40 object-cover">
                            @endif
                        </td>
                        <td class="border border-gray-900 p-2">
                            <a href="{{ route('services.edit', $service->id) }}"
                                class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to DELETE?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection