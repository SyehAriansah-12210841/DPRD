<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = ['tanggal_lahir' => 'date'];

    public function dapil()
    {
        return $this->hasOne(Dapil::class, 'id', 'dapil_id');
    }
    public function fraksi()
    {
        return $this->hasOne(Fraksi::class, 'id', 'fraksi_id');
    }
}
