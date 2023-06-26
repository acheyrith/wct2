<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Faculty of Science', 'code' => 'FS'],
            ['name' => 'Faculty of Social Science and Humanities', 'code' => 'FSH'],
            ['name' => 'Faculty of Engineering', 'code' => 'FE'],
            ['name' => 'Faculty of Development Studies', 'code' => 'FDS'],
            ['name' => 'Faculty of Education', 'code' => 'FoEd'],
            ['name' => 'Institute of Foreign language', 'code' => 'IFL'],
        ];

        DB::table('class_types')->insert($data);

    }
}
