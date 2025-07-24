<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Kolom yang boleh di-mass assign
    protected $fillable = [
        'nama',
        'nim',
        'kelas',
        'prodi_id',
        'angkatan',
    ];

    // Relasi ke Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
