<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapllies extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_perusahaan',
        'id_job',
        'cv',
        'ktp',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id_perusahaan');
    }

    public function pegawai()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function kantor()
    {
        return $this->belongsTo('App\Models\Job', 'id_job');
    }

    public function perusahaan()
    {
        return $this->users()->where('role', 'employer');
    }
    public function pelamar()
    {
        return $this->users()->where('role', 'jobseeker');
    }
}
