@extends('layouts.app')

@section('title', 'Penilaian')

@section('content')

<div class="bg-white rounded-3xl p-8 shadow-sm">

    <h3 class="text-2xl font-bold text-[#5b3b1c] mb-2">
        Daftar Karya Masuk
    </h3>

    <p class="text-gray-500 mb-6">
        Karya yang menunggu proses penilaian penilai.
    </p>

    @if($karyas->count() > 0)

        <div class="space-y-4">

            @foreach($karyas as $karya)

                <div class="border rounded-xl p-4 flex justify-between items-center">

                    <div>

                        <h4 class="font-semibold">
                            {{ $karya->judul }}
                        </h4>

                        <p class="text-sm text-gray-500">
                            Penulis: {{ $karya->nama }}
                        </p>

                        <p class="text-sm text-gray-400">
                            Kategori: {{ $karya->kategori }}
                        </p>

                        <p class="text-sm text-gray-400">
                            Status: {{ $karya->status }}
                        </p>

                    </div>

                    <a
                        href="{{ route('review.detail', $karya->id) }}"
                        class="bg-[#5b3b1c] text-white px-4 py-2 rounded-lg hover:bg-[#4a2f15]">

                        Detail

                    </a>

                </div>

            @endforeach

        </div>

    @else

        <div class="text-center py-10">

            <p class="text-gray-500">
                Tidak ada karya yang menunggu penilaian.
            </p>

        </div>

    @endif

</div>

@endsection