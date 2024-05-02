<?php

namespace Database\Factories;

use App\Models\Advertise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdvertiseFactory extends Factory
{
    protected $model = Advertise::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'photo' => 'https://picsum.photos/800/400',
        ];
    }
}
