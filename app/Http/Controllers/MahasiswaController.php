<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;    

class MahasiswaController extends Controller
{
      public function index()
    {
        $mhs = Mahasiswa::all();
        return view('backend.mahasiswa.index', compact('mhs'));
    }

    public function verifyNim(Request $request)
    {
        $request->validate([
            'nim' => 'required'
        ]);

        $user = auth()->user();

        if ($user->nim_verified) {
            return response()->json([
                'message' => 'Akun sudah terverifikasi'
            ], 400);
        }

        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        if (!$mahasiswa) {
            return response()->json([
                'message' => 'NIM tidak ditemukan atau tidak aktif'
            ], 404);
        }

        if (User::where('nim', $request->nim)->exists()) {
            return response()->json([
                'message' => 'NIM sudah digunakan akun lain'
            ], 409);
        }

        $user->update([
            'nim' => $request->nim,
            'nim_verified' => true
        ]);

        return response()->json([
            'message' => 'Verifikasi NIM berhasil',
            'nama_mahasiswa' => $mahasiswa->nama
        ]);
    }

}
