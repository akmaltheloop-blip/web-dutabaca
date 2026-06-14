@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto">

    <div class="bg-white rounded-2xl p-8 shadow">

        <h1 class="text-3xl font-bold text-green-600 mb-4">
            Karya Berhasil Dikirim
        </h1>

        <p class="text-gray-700">
            Terima kasih sudah mengirim karya Anda.
            Mohon tunggu proses penilaian maksimal
            3x24 jam.
        </p>

        <a href="{{ route('dashboard') }}"
           class="inline-block mt-6 bg-blue-600 text-white px-6 py-2 rounded-lg">
            Kembali ke Dashboard
        </a>

    </div>

</div>

@endsection