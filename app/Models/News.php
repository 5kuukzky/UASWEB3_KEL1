<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'judul',
        'slug',
        'excerpt',
        'isi',
        'gambar',
    ];

    public function searchableAs()
    {
        return 'posts_index';
    }

    public function toSearchableArray()
    {
        return [
            'judul' => $this->judul
        ];
    }
}
