<?php

use App\Models\Dapil;
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
            $table->string('nama');
            $table->mediumText('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->mediumText('alamat');
            $table->string('pendidikan');
            $table->string('fraksi');
            $table->string('jabatan');
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
        Schema::dropIfExists('anggotas');
    }
};
