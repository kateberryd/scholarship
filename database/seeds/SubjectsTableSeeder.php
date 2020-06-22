<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('subjects')->insert([
            "slug" => "one",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
        ]);

        DB::table('subjects')->insert([
            "slug" => "two",
            "subjects" => json_encode(['english', 'geography', 'biology',  'chemistry'])
        ]);

        DB::table('subjects')->insert([
            "slug" => "three",
            "subjects" => json_encode(['english', 'mathematics', 'physics',  'chemistry', 'geography'])
        ]);

       

        DB::table('subjects')->insert([
            "slug" => "four",
            "subjects" => json_encode(['english', 'english literature', 'history',  'government', 'commerce'])
        ]);

        DB::table('subjects')->insert([
            "slug" => "five",
            "subjects" => json_encode(['english', 'financial accounting', 'commerce',  'geography', 'economics'])
        ]);


        DB::table('subjects')->insert([
            "slug" => "six",
            "subjects" => json_encode(['english', 'chemistry', 'physics',  'geography', ])
        ]);
    }

}
