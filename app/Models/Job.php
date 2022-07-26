<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'id_user',
        'nama',
        'slug',
        'deskripsi',
        'kriteria',
        'jumlah',
        'tanggal',
    ];
    public function pelamar()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    public function searchableAs()
    {
        return 'posts_index';
    }

    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama
        ];
    }
}
