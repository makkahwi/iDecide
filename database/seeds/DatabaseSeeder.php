<?php

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
        factory(App\Models\evaluations::class, 100)->create();
        factory(App\Models\experiences::class, 100)->create();
        factory(App\Models\interests::class, 100)->create();
        factory(App\Models\programs::class, 100)->create();
        factory(App\Models\scores::class, 100)->create();
        factory(App\Models\users::class, 100)->create();
    }
}
