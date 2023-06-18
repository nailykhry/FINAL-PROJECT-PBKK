<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->ean8,
            'nama_barang' => $this->faker->word,
            'harga_beli_barang' => $this->faker->randomNumber(4),
            'harga_jual_barang' => $this->faker->randomNumber(5),
            'stock' => $this->faker->randomNumber(2),
            'discount' => $this->faker->randomFloat(2, 0, 1),
        ];
    }
}
