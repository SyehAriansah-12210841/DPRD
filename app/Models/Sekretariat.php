<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekretariat extends Model
{
    use HasFactory;
    protected $table = 'anggota_sekretariat';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = ['tanggal_lahir' => 'date'];
}
