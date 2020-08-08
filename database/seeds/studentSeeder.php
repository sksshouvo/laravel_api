<?php

use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => Str::random(10),
            'age' => rand(0,10),
            'class' => rand(0,10),
        ]);
    }
}
