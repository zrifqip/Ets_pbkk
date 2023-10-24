<?php

namespace Database\Factories;

use App\Models\Kondisi;
use Illuminate\Database\Eloquent\Factories\Factory;

class KondisiFactory extends Factory
{
    protected $model = Kondisi::class;

    public function definition(): array
    {
        return [
            'item_condition' => $this->faker->word(),
        ];
    }
}
