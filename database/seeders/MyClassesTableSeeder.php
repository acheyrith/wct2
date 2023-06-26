<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            
            ['name' => 'Information Technology Engineering', 'class_type_id' => $ct[2]],
            ['name' => 'Bio Engineering', 'class_type_id' => $ct[2]],
            ['name' => 'Telecommunication and Electronic Engineering', 'class_type_id' => $ct[2]],
           
        ];

        DB::table('my_classes')->insert($data);

    }
}
