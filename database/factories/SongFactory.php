<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition()
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'lyric' => $this->faker->word(),
            'singer' => $this->faker->word(),
            'album' => $this->faker->word(),
            'genre' => $this->faker->randomElement(['pop','rock','jazz','metal','rnb','classical','reggae']),
            'description' => $this->faker->text(),
            'category_id' => $this->faker->randomFloat(0,1,10),
            'status' => $this->faker->word(),
        ];
    }
}
