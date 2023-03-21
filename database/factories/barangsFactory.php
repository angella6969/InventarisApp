<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class barangsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(2,8)),
            'kode_barang'=>$this->faker->postcode(),
            'kategori_id' => mt_rand(1,5),
            'status'=> mt_rand(0,1),
            'kepemilikan'=>$this->faker->state(),
            'jumlah'=>mt_rand(1,10)
        ];
    }
}
