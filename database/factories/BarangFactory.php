<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(2,8)),
            'kode_barang'=>$this->faker->postcode(),
            'kategori_id' => mt_rand(1,5),
            'status_id'=> mt_rand(1,5),
            'kepemilikan'=>$this->faker->state(),
            'jumlah'=>mt_rand(1,10)
        ];
    }
}
