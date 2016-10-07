<?php

use Illuminate\Database\Seeder;

class QuestionBankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\QuestionBank::class, 20)->create();
    }
}
