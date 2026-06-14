@extends('layouts.app')

@section('title', 'Kirim Karya')

@section('content')

<div class="bg-white rounded-2xl p-8 shadow-sm">

    <h2 class="text-2xl font-bold text-[#5b3b1c] mb-6">
        Kirim Karya
    </h2>

    <form
    action="{{ route('kirim-karya.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Judul Karya
            </label>
            <input
                type="text"
                name="judul"
                class="w-full border rounded-lg px-4 py-2"
                placeholder="Masukkan judul karya">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Kategori
            </label>

            <select 
                name="kategori"
                class="w-full border rounded-lg px-4 py-2">

                <option>Pilih Kategori</option>
                <option>Cerpen</option>
                <option>Puisi</option>
                <option>Pantun/Quotes</option>

            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Deskripsi Karya
            </label>

            <textarea
                name = "deskripsi"
                rows="5"
                class="w-full border rounded-lg px-4 py-2"
                placeholder="Masukkan deskripsi karya"></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium">
                Upload File
            </label>

            <input
                type="file"
                name="file"
                accept=".pdf"
                class="w-full border rounded-lg px-4 py-2">
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg">
            Kirim Karya
        </button>

    </form>

</div>

<div class="bg-white rounded-2xl shadow-md p-8 mt-6">

    <h3 class="text-xl font-bold text-[#5b3b1c] mb-6">
        Riwayat Karya Saya
    </h3>

    @if($karyas->count())

        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>
                    <tr class="bg-gray-100">

                        <th class="p-3 text-left">
                            Judul
                        </th>

                        <th class="p-3 text-left">
                            Kategori
                        </th>

                        <th class="p-3 text-left">
                            Status
                        </th>

                        <th class="p-3 text-left">
                            Tanggal
                        </th>

                    </tr>
                </thead>

                <tbody>

                @foreach($karyas as $karya)

                    <tr class="border-b">

                        <td class="p-3">
                            {{ $karya->judul }}
                        </td>

                        <td class="p-3">
                            {{ $karya->kategori }}
                        </td>

                        <td class="p-3">

                            @if($karya->status == 'Menunggu Review')
                                <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700">
                                    Menunggu Review
                                </span>

                            @elseif($karya->status == 'Diterima')
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700">
                                    Diterima
                                </span>

                            @elseif($karya->status == 'Revisi')
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700">
                                    Revisi
                                </span>

                            @elseif($karya->status == 'Ditolak')
                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-700">
                                    Ditolak
                                </span>
                            @endif

                        </td>

                        <td class="p-3">
                            {{ $karya->created_at->format('d M Y') }}
                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    @else

        <p class="text-gray-500">
            Belum ada karya yang dikirim.
        </p>

    @endif

</div>

@endsection