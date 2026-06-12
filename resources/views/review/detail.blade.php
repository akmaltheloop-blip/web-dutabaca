@extends('layouts.app')

@section('title', 'Detail Penilaian')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm">

```
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

        <div id="catatan-box" class="hidden mb-4">

            <label class="font-semibold block mb-2">
                Catatan Reviewer
            </label>

            <textarea
                name="catatan_review"
                id="catatan_review"
                rows="4"
                class="w-full border rounded-xl p-3"
                placeholder="Masukkan catatan reviewer..."></textarea>

        </div>

        <button
            type="submit"
            class="bg-[#5b3b1c] text-white px-6 py-3 rounded-xl hover:bg-[#4a2f15]">

            Simpan Penilaian

        </button>

    </form>

</div>
```

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const status = document.getElementById('status');
    const catatanBox = document.getElementById('catatan-box');

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

});

</script>

@endsection
