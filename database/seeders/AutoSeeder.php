<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Auto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auto::factory()
                ->count(6)
                ->create();
    }
}
