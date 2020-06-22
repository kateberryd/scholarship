<?php

use Illuminate\Database\Seeder;
use App\Subjects;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('courses')->insert([
            "name" => "Biotechnology",
            "subjects" =>json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          
          DB::table('courses')->insert([
            "name" => "Microbiology",
            "subjects" =>json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Biochemistry",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Molecular Bioloy",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          
          DB::table('courses')->insert([
            "name" => "B.Sc Nursing",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Medicine and Surgery",
            "subjects" =>json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Dental Surgery",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Food Processing",
            "subjects" =>json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Enviromental Biology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Animal Biology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Plant Biology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Marine Biology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Terrestrial and freshwater ecology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "B.Sc Occupational and environmental safety and health",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "B.Sc Occupational and environmental safety and health",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "B.Sc Occupational and environmental safety and health",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Applied Chmistry",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Industrial Chmistry",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Environmental Chemistry",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "B.Sc computer system engineering",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "B.Sc Information Technology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "Computer Science",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Software Engineering",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Mathematics",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Statiscal Science",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Mathematics and Modeling",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Physics electronics",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Energy and Evironmental physics",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Medical Physics",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "fine arts in film production",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "fine arts in animation",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "B.Sc gender and Development studies",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "LL.B (Law)",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Sociology ",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Psychology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Hotel and Tourism Management",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Economics",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Business and Management",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
          DB::table('courses')->insert([
            "name" => "Social  and Economics studies",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);


          DB::table('courses')->insert([
            "name" => "geology",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);

          DB::table('courses')->insert([
            "name" => "geosciences",
            "subjects" => json_encode(['english', 'mathematics', 'biology', 'physics', 'chemistry'])
          ]);
         

          
    }
}
