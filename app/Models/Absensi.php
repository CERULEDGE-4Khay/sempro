<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = [
        'user_id','magang_id', 'tanggal', 'jam_masuk', 'jam_keluar', 'status', 'keterangan','lokasi_masuk','lokasi_keluar'
    ];

       public function user()
    {
        return $this->belongsTo(User::class);
    }
}
