<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        
            ['title' => 'teacher', 'name' => 'Teacher', 'level' => 2],
           // ['title' => 'librarian', 'name' => 'librarian', 'level' => 6],
           ['title' => 'student', 'name' => 'Student', 'level' => 3],
        ];
        DB::table('user_types')->insert($data);
    }
}
