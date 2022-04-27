<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
//         \App\Models\Category::factory(10)->create();
=======
        //  \App\Models\Category::factory(10)->create();
>>>>>>> 9f7e128508b7f1180f086acc3df1bde59ca9fb83
        $this->call(UserSeeder::class);
    }
}
