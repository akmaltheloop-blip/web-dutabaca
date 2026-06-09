@extends('layouts.app')

@section('title', 'Kirim Karya')

@section('content')

<div class="bg-white rounded-2xl p-8 shadow-sm">

    <h2 class="text-2xl font-bold text-[#5b3b1c] mb-6">
        Kirim Karya
    </h2>

    <form>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Judul Karya
            </label>
            <input
                type="text"
                class="w-full border rounded-lg px-4 py-2"
                placeholder="Masukkan judul karya">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Kategori
            </label>

            <select class="w-full border rounded-lg px-4 py-2">
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
                class="w-full border rounded-lg px-4 py-2">
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg">
            Kirim Karya
        </button>

    </form>

</div>

@endsection