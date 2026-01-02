@extends('layouts.app')

@section('content')

<div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Data Produk</h3>
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('kelas.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
                            + Tambah Produk
                        </a>
                    </div>
                    <table class="w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">NIM</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mhs as $row)
                            <tr class="hover:bg-gray-50">
                                <td class="p-2 border">{{ $row->id }}</td>
                                <td class="p-2 border">{{ $row->nim }}</td>
                                <td class="p-2 border">{{ $row->nama }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
