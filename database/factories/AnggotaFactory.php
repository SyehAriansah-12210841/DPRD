<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birthDate = $this->faker->date();
        $res = Http::get('https://picsum.photos/300/250?nocache=' . microtime());
        $fileName = Str::random(5);
        $path = 'uploads/' . $fileName . '.jpg';
        Storage::put('uploads/' . $fileName . '.jpg', $res->body());
        return [
            'fraksi_id' => random_int(1, 4),
            'dapil_id' => random_int(1, 10),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $birthDate,
            'alamat' => $this->faker->address(),
            'pendidikan' => 'Doktor',
            'jabatan' => 'Anggota',
            'jabatan_fraksi' => 'Anggota',
            'periode' => $this->faker->date('Y') . '-' . $this->faker->date('Y'),
            'gambar' => $path,
            'badan_akd' => collect(['Badan Musyawarah', 'Badan Anggaran', 'Badan Pembentukan Perda', 'Badan Kehormatan'])->random(),
            // 'jabatan_akd' => 'Anggota'
            'komisi' => collect(['Komisi A', 'Komisi B', 'Komisi C'])->random(),
            'jabatan_komisi' => 'Anggota'
        ];
    }
}
