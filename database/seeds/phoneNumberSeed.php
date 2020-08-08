<?php

use Illuminate\Database\Seeder;

class phoneNumberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\phone_number::class, 10)->create();
    }
}
