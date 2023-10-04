<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PresentationsTableSeeder extends Seeder
{
    /**
     * Execute the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Presentation::factory()->count(10)->create();
    }
}
