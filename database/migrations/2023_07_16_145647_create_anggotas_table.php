<?php

use App\Models\Dapil;
use App\Models\Fraksi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Dapil::class,)->constrained('dapil', 'id')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Fraksi::class)->constrained('fraksi', 'id')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('nama');
            $table->mediumText('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->mediumText('alamat');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('jabatan_fraksi');
            $table->string('periode');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
