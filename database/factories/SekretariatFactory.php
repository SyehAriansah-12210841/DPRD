<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnggotaSekretariat>
 */
class SekretariatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $res = Http::get('https://picsum.photos/300/250?nocache=' . microtime());
        $fileName = Str::random(5);
        $path = 'uploads/' . $fileName . '.jpg';
        Storage::put('uploads/' . $fileName . '.jpg', $res->body());
        return [
            'nama' => $this->faker->name(),
            'jabatan' => 'Pejabat Fungsional',
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'pendidikan' => 'Doktor',
            'gambar' => $path

        ];
    }
}
