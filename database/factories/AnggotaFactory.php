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
            'dapil_id' => random_int(1, 10),
            'nama' => $this->faker->name(),
            'tempat_tanggal_lahir' => $this->faker->city . ',' . $birthDate . '( ' . Carbon::createFromDate($birthDate)->diffInYears() . ' tahun)',
            'alamat' => $this->faker->address(),
            'pendidikan' => 'Doktor',
            'fraksi' => 'Fraksi Partai GakTau',
            'jabatan' => 'Anggota',
            'periode' => $this->faker->date('Y') . '-' . $this->faker->date('Y'),
            'gambar' => $path
        ];
    }
}
