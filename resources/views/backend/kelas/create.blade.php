@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Kelas</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kelas.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="kode_kelas" class="block font-medium text-gray-700">Kode Kelas</label>
            <input type="text" name="kode_kelas" id="kode_kelas" value="{{ old('kode_kelas') }}" required class="w-full border px-3 py-2 rounded" />
        </div>

        <div>
            <label for="nama_kelas" class="block font-medium text-gray-700">Nama Kelas</label>
            <input type="text" name="nama_kelas" id="nama_kelas" value="{{ old('nama_kelas') }}" required class="w-full border px-3 py-2 rounded" />
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
