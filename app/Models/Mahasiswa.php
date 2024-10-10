<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    
    protected $table = 'pendaftaran_praktikum';
    
    protected $fillable = [
        'id_mahasiswa',
        'nama',
        'nim',
        'semester',
        'upload_pembayaran',
    ];
    
}
