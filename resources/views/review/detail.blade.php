@extends('layouts.app')

@section('title', 'Detail Penilaian')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm">

    <h2 class="text-2xl font-bold text-[#5b3b1c] mb-6">
        Detail Karya
    </h2>

    <div class="space-y-5">

        <div>
            <label class="font-semibold block mb-1">
                Judul Karya
            </label>

            <p class="text-gray-700">
                {{ $karya->judul }}
            </p>
        </div>

        <div>
            <label class="font-semibold block mb-1">
                Penulis
            </label>

            <p class="text-gray-700">
                {{ $karya->nama }}
            </p>
        </div>

        <div>
            <label class="font-semibold block mb-1">
                NIM
            </label>

            <p class="text-gray-700">
                {{ $karya->nim }}
            </p>
        </div>

        <div>
            <label class="font-semibold block mb-1">
                Kategori
            </label>

            <p class="text-gray-700">
                {{ $karya->kategori }}
            </p>
        </div>

        <div>
            <label class="font-semibold block mb-1">
                Isi Karya
            </label>

            <p class="text-gray-700">
                {{ $karya->isi }}
            </p>
        </div>

        <form
            action="{{ route('review.update', $karya->id) }}"
            method="POST">

            @csrf

            <div class="mb-4">

                <label class="font-semibold block mb-2">
                    Status Penilaian
                </label>

                <select
                    name="status"
                    class="w-full border rounded-xl p-3"
                    required>

                    <option value="">
                        -- Pilih Status --
                    </option>

                    <option value="accepted">
                        Diterima
                    </option>

                    <option value="rejected">
                        Ditolak
                    </option>

                    <option value="revisi">
                        Revisi
                    </option>

                </select>

            </div>

            <button
                type="submit"
                class="bg-[#5b3b1c] text-white px-6 py-3 rounded-xl hover:bg-[#4a2f15]">

                Simpan Penilaian

            </button>

        </form>

    </div>

</div>

@endsection