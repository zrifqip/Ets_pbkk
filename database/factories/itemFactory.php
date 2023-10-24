<?php

namespace Database\Factories;

use App\Models\item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class itemFactory extends Factory
{
    protected $model = item::class;

    public function definition(): array
    {
        return [
            'kondisi_id'=>$this->faker->randomNumber(),
            'categories_id'=>$this->faker->randomNumber(),
            'keterangan' => $this->faker->word(),
            'kecacatan' => $this->faker->word(),
            'Jumlah' => $this->faker->randomNumber(),
            'Gambar' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

    }
}
