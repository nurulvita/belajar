<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjam>
 */
class PeminjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_peminjam' => fake()->name(),
            'judul_buku' => fake()->company(),
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => '2023-02-01'
        ];
    }
}
