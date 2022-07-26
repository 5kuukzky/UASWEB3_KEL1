<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama',
        'slug',
        'deskripsi',
        'kriteria',
        'jumlah',
        'tanggal',
    ];

    public function intern()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
