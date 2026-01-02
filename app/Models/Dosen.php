<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nidn'];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_dosen');
    }
}
