<?php

namespace Database\Seeders;

use App\Models\Etudiants;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassesTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Etudiants::factory(30)->create();

      // $this->call(ClassesTableSeeder::class);
    }
}
