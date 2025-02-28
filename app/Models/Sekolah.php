<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $fillable = ['nama_sekolah', 'alamat', 'telepon', 'email', 'jenis_sekolah', 'status_sekolah', 'akreditasi', 'website', 'latitude', 'longitude'];
    protected $table = 'sekolahs';
    public $timestamps = false;
}
