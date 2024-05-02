<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Song::factory(10)->create();
    }
}
