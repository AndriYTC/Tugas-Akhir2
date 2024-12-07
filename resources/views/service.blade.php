@extends('layout.main')
@section('title', 'Service')
@section('container')
<section class="mt-4 bg-white dark:bg-gray-900">
    <script>
        function showAlert() {
            alert("Maaf fitur ini belum tersedia.");
        }
    </script>
    <div class="text-center mb-8">
        <h1 class="text-5xl mb-2 font-bold">Layanan Unggulan Kami</h1>
        <p class="text-3xl">Kami siap melayani anda</p>
    </div>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h5 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-5">Desain Kustom Jersey</h5>
                <p class="text-lg font-normal text-gray-600 dark:text-gray-400 mb-5">Buat jersey impian Anda dengan desain kustom yang sesuai dengan gaya dan kebutuhan Anda. Pilih warna, logo, dan nomor sesuai keinginan!</p>
               <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a class="no-underline text-white" href="{{url('services')}}">Mulai desain</a></button>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h5 class="flex text-gray-900 dark:text-white text-2xl font-extrabold mb-5">Jersey Berkualitas Tinggi</h5>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-5">Kami menyediakan jersey dari bahan berkualitas tinggi yang nyaman dipakai. Semua jersey dirancang untuk ketahanan dan
                gaya.</p>
                <button onclick="showAlert()" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a class="no-underline text-white"  href="">Lihat Bahan</a></button>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <h5 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-5">Pelayanan Kilat</h5>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-5">Tim customer service kami siap membantu Anda dengan pertanyaan dan kebutuhan. Hubungi kami kapan saja!</p>
                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a class="no-underline text-white" href="https://wa.me/0895621133056?text=Halo,%20saya%20butuh%20bantuan." target="_blank">Hubungi CS</a></button>
                
            </div>
        </div>
    </div>
</section>
@endsection