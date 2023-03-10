<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::factory()->count(10)->create();
    }
}
