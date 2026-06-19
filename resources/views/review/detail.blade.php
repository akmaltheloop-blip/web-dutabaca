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
                {{ $karya->user->name ?? '-' }}
            </p>
        </div>

        <div>
            <label class="font-semibold block mb-1">
                NIM
            </label>

            <p class="text-gray-700">
                {{ $karya->user->nim ?? '-' }}
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
                Deskripsi
            </label>

            <p class="text-gray-700">
                {{ $karya->deskripsi }}
            </p>
        </div>

        {{-- FILE KARYA --}}
        <div>
            <label class="font-semibold block mb-3">
                File Karya
            </label>

            @if($karya->file)

                <a href="{{ asset('storage/' . $karya->file) }}"
                   target="_blank"
                   class="inline-block bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 mb-4">
                    Buka File 
                </a>

                <iframe
                    src="{{ asset('storage/' . $karya->file) }}"
                    width="100%"
                    height="600"
                    class="border rounded-xl">
                </iframe>

            @else

                <p class="text-red-500">
                    File tidak tersedia.
                </p>

            @endif
        </div>

        {{-- FORM PENILAIAN --}}
        <form action="{{ route('review.update', $karya->id) }}"
              method="POST">

            @csrf

            <div class="mb-4">

                <label class="font-semibold block mb-2">
                    Status Penilaian
                </label>

                <select
                    name="status"
                    id="status"
                    class="w-full border rounded-xl p-3"
                    required>

                    <option value="">
                        -- Pilih Status --
                    </option>

                    <option value="Diterima">
                        Diterima
                    </option>

                    <option value="Ditolak">
                        Ditolak
                    </option>

                    <option value="Revisi">
                        Revisi
                    </option>

                </select>

            </div>

            {{-- CATATAN REVIEWER --}}
            <div id="catatanBox" class="mb-4 hidden">

                <label class="font-semibold block mb-2">
                    Catatan Reviewer
                </label>

                <textarea
                    name="catatan_review"
                    id="catatan_review"
                    rows="4"
                    class="w-full border rounded-xl p-3"
                    placeholder="Masukkan alasan penolakan atau revisi..."></textarea>

            </div>

            <button
                type="submit"
                class="bg-[#5b3b1c] text-white px-6 py-3 rounded-xl hover:bg-[#4a2f15]">

                Simpan Penilaian

            </button>

        </form>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const statusSelect = document.getElementById('status');
    const catatanBox = document.getElementById('catatanBox');
    const catatanInput = document.getElementById('catatan_review');

    statusSelect.addEventListener('change', function () {

        if (
            this.value === 'Ditolak' ||
            this.value === 'Revisi'
        ) {

            catatanBox.classList.remove('hidden');
            catatanInput.required = true;

        } else {

            catatanBox.classList.add('hidden');
            catatanInput.required = false;
            catatanInput.value = '';

        }

    });

});

</script>

@endsection