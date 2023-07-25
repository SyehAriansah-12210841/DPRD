<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    use HasFactory;
    protected $table = 'dapil';
    protected $guarded = ['id', 'created_at' . 'updated_at'];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'dapil_id', 'id');
    }
}
