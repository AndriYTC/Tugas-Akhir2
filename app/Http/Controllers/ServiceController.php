<?php

// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999|required',
        ],[
        'title.required' => 'Nama club harus diisi !!',
        'description.required' => 'deskripsi harus diisi !!',
        'image.required' => 'Desain harus di upload !!'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
            $service->image = $fileNameToStore;
        }

        $service->save();
        return redirect()->route('services.index')->with('success', 'Pesanan created successfully.');
    }

    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999',
        ]);

        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($service->image) {
                Storage::delete('public/images/' . $service->image);
            }

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
            $service->image = $fileNameToStore;
        }

        $service->save();
        return redirect()->route('services.index')->with('success', 'Pesanan updated successfully.');
    }

    public function destroy(Service $service)
    {
        // Hapus gambar jika ada
        if ($service->image) {
            Storage::delete('public/images/' . $service->image);
        }

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Pesanan deleted successfully.');
    }
}

