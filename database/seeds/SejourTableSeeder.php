<?php

use Illuminate\Database\Seeder;

class SejourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sejour::class,20)->create();
    }
}
