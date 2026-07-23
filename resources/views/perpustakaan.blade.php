@extends('layouts.app')

@section('title', 'Perpustakaan Digital')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-blue-900">
            📚 Perpustakaan Digital Cendekia
        </h1>

        <p class="mt-3 text-gray-600">
            Daftar koleksi buku yang tersedia di Perpustakaan Digital Cendekia.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($books as $book)

        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">

            @if($book->cover)
                <img
                    src="{{ asset('storage/' . $book->cover) }}"
                    alt="{{ $book->title }}"
                    class="w-full h-72 object-cover">
            @else
                <div class="w-full h-72 bg-gray-200 flex items-center justify-center">
                    <span class="text-5xl">📖</span>
                </div>
            @endif

            <div class="p-6">

                <h2 class="text-xl font-bold text-slate-800">
                    {{ $book->title }}
                </h2>

                <p class="mt-2 text-gray-600">
                    <strong>Penulis :</strong> {{ $book->author }}
                </p>

                <p class="text-gray-600">
                    <strong>Kategori :</strong> {{ $book->category }}
                </p>

                <p class="text-gray-600">
                    <strong>Tahun :</strong> {{ $book->publication_year }}
                </p>

                <p class="text-gray-600">
                    <strong>Stok :</strong> {{ $book->stock }}
                </p>

                <div class="mt-5">

                    @if($book->stock > 0)

                        <span class="inline-block bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold">
                            ✅ Tersedia
                        </span>

                    @else

                        <span class="inline-block bg-red-100 text-red-700 px-4 py-2 rounded-full font-semibold">
                            ❌ Habis
                        </span>

                    @endif

                </div>

            </div>

        </div>

        @empty

        <div class="col-span-3 text-center py-10">
            <h2 class="text-2xl font-semibold text-gray-500">
                Belum ada data buku.
            </h2>
        </div>

        @endforelse

    </div>

</div>

@endsection