<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'បន្ទាយមានជ័យ - Banteay Meanchey',
            'បាត់ដំបង - Battambang',
            'កំពង់ចាម - Kampong Cham',
            'កំពង់ឆ្នាំង - Kampong Chhnang',
            'កំពង់ស្ពឺ - Kampong Speu',
            'កំពង់ធំ - Kampong Thom',
            'កំពត​ - Kampot',
            'កណ្ដាល - kandal',
            'កោះកុង - Koh Kong',
            'ក្រចេះ - Kratie',
            'មណ្ឌលគិរី - Mondulkiri',
            'ភ្នំពេញ - Phnom Penh',
            'ព្រះវិហារ - Preah Vihear',
            'ព្រៃវែង - Prey Veng',
            'ពោធិ៍សាត់ - Pursat',
            'រតនគិរី - Ratanakiri',
            'សៀមរាប - Siem Reap',
            'ព្រះសីហនុ - Preah Sihanouk',
            'ស្ទឹងត្រែង - Stung Treng',
            'ស្វាយរៀង - Svay Rieng',
            'តាកែវ - Takeo', 
            'ឧត្តរមានជ៍យ - Oddar Meanchey',
            'កែប - Kep',
            'ប៉ៃលិន - Pailin',
            'ត្បូងឃ្មុំ - Tboung Khmum',

        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
