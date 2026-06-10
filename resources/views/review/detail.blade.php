@extends('layouts.app')

@section('title', 'Detail Penilaian')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm">

    <h2 class="text-2xl font-bold text-[#5b3b1c] mb-6">
        Detail Karya
    </h2>

    <div class="space-y-5">

        {{-- Judul --}}
        <div>
            <label class="font-semibold block mb-1">
                Judul Karya
            </label>

            <p class="text-gray-700">
                Cerpen Literasi
            </p>
        </div>

        {{-- Penulis --}}
        <div>
            <label class="font-semibold block mb-1">
                Penulis
            </label>

            <p class="text-gray-700">
                Nur Akmal
            </p>
        </div>

        {{-- Kategori --}}
        <div>
            <label class="font-semibold block mb-1">
                Kategori
            </label>

            <p class="text-gray-700">
                Cerpen
            </p>
        </div>

        {{-- Deskripsi --}}
        <div>
            <label class="font-semibold block mb-1">
                Deskripsi
            </label>

            <p class="text-gray-700">
                Karya mengenai pentingnya budaya membaca di kalangan mahasiswa.
            </p>
        </div>

        {{-- File --}}
        <div>
            <label class="font-semibold block mb-2">
                File Karya
            </label>

            <button
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Lihat File
            </button>
        </div>

        {{-- Status --}}
        <div>

            <label class="font-semibold block mb-2">
                Status Penilaian
            </label>

            <select
                id="status"
                class="w-full border rounded-xl p-3">

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

        {{-- Catatan Reviewer --}}
        <div id="catatan-box" class="hidden">

            <label class="font-semibold block mb-2">
                Catatan Reviewer
            </label>

            <textarea
                id="catatan"
                rows="5"
                class="w-full border rounded-xl p-3"
                placeholder="Masukkan alasan penolakan atau revisi..."></textarea>

        </div>

        {{-- Tombol Simpan --}}
        <div>

            <button
                id="btn-simpan"
                class="bg-[#5b3b1c] text-white px-6 py-3 rounded-xl hover:bg-[#4a2f15] transition">

                Simpan Penilaian

            </button>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const status = document.getElementById('status');
    const catatanBox = document.getElementById('catatan-box');
    const catatan = document.getElementById('catatan');
    const btnSimpan = document.getElementById('btn-simpan');

    status.addEventListener('change', function () {

        if (
            this.value === 'Ditolak' ||
            this.value === 'Revisi'
        ) {

            catatanBox.classList.remove('hidden');

        } else {

            catatanBox.classList.add('hidden');

        }

    });

    btnSimpan.addEventListener('click', function () {

        // wajib pilih status
        if (status.value === '') {

            alert('Pilih status penilaian terlebih dahulu!');
            return;

        }

        // wajib isi catatan jika Ditolak/Revisi
        if (
            (status.value === 'Ditolak' || status.value === 'Revisi')
            &&
            catatan.value.trim() === ''
        ) {

            alert('Catatan reviewer wajib diisi!');
            return;

        }

        // Diterima → Publikasi
        if (status.value === 'Diterima') {

            alert('Karya diterima dan dipublikasikan.');

            window.location.href = "{{ route('publikasi.index') }}";

            return;

        }

        // Ditolak atau Revisi → kembali ke Review
        alert('Penilaian berhasil disimpan.');

        window.location.href = "{{ route('review.index') }}";

    });

});

</script>

@endsection