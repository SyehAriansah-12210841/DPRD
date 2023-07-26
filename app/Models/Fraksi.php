<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraksi extends Model
{
    use HasFactory;
    protected $table = 'fraksi';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['anggota'];
    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'fraksi_id', 'id');
    }
}
