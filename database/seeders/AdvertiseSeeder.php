<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdvertiseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Advertise::factory(3)->create();
    }
}
