<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(UsersTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(UnitTwosTableSeeder::class);
        $this->call(JabatansTableSeeder::class);
        $this->call(LokasisTableSeeder::class);
    }
}