<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [1,1,1,1,1,1,1,1,1,
                    2,2,2,2,2,2,2,2,2,2,2,2,2,2,
                    3,3,3,3,3,3,3,3,3,3,
                    4,4,4,4,4,4,4,4,
                    5,5,5,5,5,5,5,5,
                    6,6,6,6,6,6,6,6,6,
                    7,7,7,7,7,7,7,7,
                    8,8,8,8,8,8,8,8,8,8,8,
                    9,9,9,9,9,9,9,
                    10,10,10,10,10,10,
                    11,11,11,11,11,
                    12,12,12,12,12,12,12,12,12,12,12,12,12,12,
                    13,13,13,13,13,13,13,13,
                    14,14,14,14,14,14,14,14,14,14,14,14,14,
                    15,15,15,15,15,15,15,
                    16,16,16,16,16,16,16,16,16,
                    17,17,17,17,17,17,17,17,17,17,17,17,
                    18,18,18,18,18,
                    19,19,19,19,19,19,
                    20,20,20,20,20,20,20,20,
                    21,21,21,21,21,21,21,21,21,21,
                    22,22,22,22,22,
                    23,23,
                    24,24,
                    25,25,25,25,25,25,25,

                ];

        $lgas = [
            'សិរីសោភ័ណ - Serei Saophoan', 'ប៉ោយប៉ែត - Poipet', 'មង្គលបុរី - Mongkol Borey', 'ភ្នំស្រុក - Phnom Srok', 'ព្រះនេត្រព្រះ - Preah Netr Preah', 'អូរជ្រៅ - Ou Chrov', 'ថ្មពួក - Thma Puok', 'ស្វាយចេក - Svay Chek', 'ម៉ាឡៃ - Malai',
            'បាណន់ - Banan', 'ថ្មគោល - Thma Koul', 'ក្រុងបាត់ដំបង - Krong Battambang', 'បវេល - Bavel', 'ឯកភ្នំ - Ek Phnom', 'មោងឫស្សី - Moung Ruessei', 'រតនមណ្ឌល - Rotanak Mondol', 'សង្កែ - Sangkae', 'សំឡូត - Samlout', 'សំពៅលូន - Sampov Loun', 'ភ្នំព្រឹក - Phnom Proek', 'កំរៀង​ - Kamrieng', 'គាស់ក្រឡ - Koas Krala', 'រុក្ខគិរី - Rukhak Kiri',
            'បាធាយ - Batheay', 'ចំការលើ - Chamkar Leu', 'ជើងព្រៃ - Cheung Prey', 'ក្រុងកំពង់ចាម - Krong Kampong Cham', 'កំពង់សៀម - Kampong Siem', 'កងមាស - Kang Meas', 'កោះសូទិន - Koh Sotin', 'ព្រៃឈរ - Prey Chhor', 'ស្រីសន្ធរ - Srey Santhor', 'ស្ទឹងត្រង់ - Stueng Trang',
            'បរិបូណ៌ - Baribour', 'ជលគិរី - Chol Kiri', 'ក្រុងកំពង់ឆ្នាំង - Krong Kampong Chhnang', 'កំពង់លែង - Kampong Leaeng', 'កំពង់ត្រឡាច - Kampong Tralach', 'រលាប្អៀរ - Rolea Bier', 'សាមគ្គីមានជ័យ - Sameakki Mean Chey', 'ទឹកផុស - uek Phos',
            'បសេដ្ឋ - Basedth', 'ក្រុងច្បារមន - Krong Chbar Mon', 'គងពិសី - Kong Pisei', 'ឱរ៉ាល់ - Aoral', 'ឧដុង្គ - Odongk', 'ភ្នំស្រួច - Phnom Sruoch', 'សំរោងទង - Samraong Tong', 'ថ្ពង - Thpong',
            'បារាយណ៍ - Baray', 'កំពង់ស្វាយ - Kampong Svay', 'ក្រុងស្ទឹងសែន - Krong Stueng Saen', 'ប្រាសាទបល្ល័ង្ក - Prasat Balangk', 'ប្រាសាទសំបូរ - Prasat Sambour', 'សណ្ដាន់ - Sandaan', 'សន្ទុក - Santuk', 'ស្ទោង - Stoung', 'តាំងគោក - Taing Kouk',
            'អង្គរជ័យ - Angkor Chey', 'បន្ទាយមាស - Banteay Meas', 'ឈូក - Chhuk', 'ជុំគិរី - Chum kiri', 'ដងទង់ - Dang Tong', 'កំពង់ត្រាច - Kampong Trach', 'ទឹកឈូ - Tuek Chhou', 'ក្រុងកំពត - Krong Kampot', 
            'កណ្ដាលស្ទឹង - kandal Stueng', 'កៀនស្វាយ - Kien Svay', 'កណ្ដាលខ្សាច់ - Khsach kandal', 'កោះធំ - Kaoh Thum', 'លើកដែក - Leuk Daek', 'ល្វាឯម - Lvea Aem', 'មុខកំពូល - Mukh Kampul', 'អង្គស្នួល - Angk Snuol', 'ពញាឮ - Ponhea Lueu', 'ស្អាង - S ang', 'ក្រុងតាខ្មៅ - krong Ta Khmau',
            'បុទុមសាគរ - Botum Sakor', 'គិរីសាគរ - Kiri Sakor', 'ក្រុងខេមរភូមិន្ទ - Krong Khemara Phoumin', 'កោះកុង - Koh Kong', 'មណ្ឌលសីមា - Mondol Seima', 'ស្រែអំបិល - Srae Ambel', 'ថ្មបាំង - Thma Bang',
            'ឆ្លូង - Chhloung', 'ក្រុងក្រចេះ - Krong Kratie', 'ព្រែកប្រសព្វ - Preaek Prasab', 'ស្រុកសំបូរ - Sambour', 'ស្នួល - Snoul', 'ចិត្របុរី - Chetr Borei',
            'កែវសីមា - Keo Seima', 'កោះញែក - Kaoh Nheaek', 'អូររាំង - Ou Reang', 'ពេជ្រចិន្ដា - Pechr Chenda', 'សែនមនោរម្យ - Krong Saen Monourom',
            'ចំការមន - Chamkar Mon', 'ដូនពេញ - Daun Penh', '៧មករា - 7 Makara', 'ទួលគោក - Toul Kouk', 'ដង្កោ - Dangkao', 'មានជ័យ - Mean Chey', 'ឫស្សីកែវ - Russey Keo', 'សែនសុខ - Sen Sok', 'ពោធិ៍សែនជ័យ - Pou Senchey', 'ជ្រោយចង្វារ - Chroy Changvar', 'ព្រែកព្នៅ - Prek Pnov', 'ច្បារអំពៅ - Chbar Ampov', 'បឹងកេងកង - Boeng Keng Kang', 'កំបូល - Kamboul',
            'ជ័យសែន - Chey Saen', 'ឆែប - Chhaeb', 'ជាំក្សាន្ដ - Choam Khsant', 'គូលែន - kuleaen', 'រវៀង - Rovieng', 'សង្គមថ្មី - Sangkum Thmei', 'ត្បែងមានជ័យ - Tbaeng Mean Chey', 'ក្រុងព្រះវិហារ - Krong Preah Vihear',
            'បាភ្នំ - Ba Phnum', 'កំចាយមារ - Kamchay Mear','កំពង់ត្របែក - Kampong Trabaek', 'កញ្ច្រៀច - Kanhchriech', 'មេសាង - Me Sang', 'ពាមជរ - Peam Chor', 'ពាមរ - Peam Ro', 'ពារាំង - Pea Reang', 'ព្រះស្ដេច - Preah Sdach', 'ក្រុងព្រៃវែង - Krong Prey Veng', 'ពោធិ៍រៀង - Pou Rieng', 'ស៊ីធរកណ្ដល - Sithor Kandal', 'ស្វាយអន្ទរ - Svay Antor',
            'បាកាន - Bakan', 'កណ្ដៀង - Kandieng', 'ក្រគរ - Kra Kor', 'ភ្នំក្រវាញ - Phnom Kravanh', 'ក្រុងពោធិ៍សាត់ - Krong Pursat', 'វាលវែង - Veal Veng', 'Tតាលោសែនជ័យ - alou Sen Chey',
            'អណ្ដូងមាស - Andoung Meas', 'ក្រុងបានលុង - Krong Banlung', 'បរកែវ - Bor Keo', 'កូនមុំ - Koun Mom', 'លំផាត់ - Lumphat', 'អូរជុំ - Ou Chum', 'អូរយ៉ាដាវ - Ou Ya Dav', 'តាវែង - Ta Veng', 'វឺនសៃ - Veun Sai',
            'អង្គរជុំ - Angkor Chum', 'អង្គរធំ - Angkor Thom', 'បន្ទាយស្រី - Banteay Srei', 'ជីក្រែង - Chi Kraeng', 'ក្រឡាញ់  - kralanh', 'ពួក - Puok', 'ប្រាសាទបាគង - Prasat Bakong', 'ក្រុងសៀមរាប - Krong Siem Reap', 'សូទ្រនិគម - Sout Nikom', 'ស្រីស្នំ - Srei Snam', 'ស្វាយលើ - Svay leu', 'វ៉ារិន - Varin',
            'ក្រុងព្រះសីហនុ - Krong Preah Sihanouk', 'ព្រៃនប់ - Prey Nob', 'ស្ទឹងហាវ - Stueng Hav', 'កំពង់សិលា - Kampong Seila', 'កោះរ៉ុង - Koh Rong',
            'សេសាន - Sesan', 'សៀមបូក - Siem Bouk', 'សៀមប៉ាង - Siem Pang', 'ក្រុងស្ទឹងត្រែង - Krong Stung Treng', 'ថាឡាបរិវ៉ាត់ - Thala Barivat' ,'បូរីអូរស្វាយសែនជ័យ - Borei O Svay Sen Chey',
            'ចន្ទ្រា - Chantrea', 'កំពង់រោទិ៍ - Kampong Rou' ,'រំដួល - Rumduol', 'រមាសហែក - Romeas Haek', 'ស្វាយជ្រំ - Svay Chrum', 'ក្រុងស្វាយរៀង - Krong Svay Rieng', 'ស្វាយទាប - Svay Teab', 'ក្រុងបាវិត - krong Bavet',
            'អង្គរបុរី - Angkor Borei', 'បាទី - Bati', 'បុរីជលសារ - Bourei Cholsar', 'គិរីវង់ - Kiri Vong', 'កោះអណ្ដែត - Kaoh Andaet', 'ព្រៃកប្បាស - Prey Kabbas', 'សំរោង - Samraong', 'ក្រុងដូនកែវ - Krong Doun Kaev', 'ត្រាំកក់ - Tram Kak', 'ទ្រាំង - Treang',
            'អន្លង់វែង - Anlong Veng', 'បន្ទាយអំពិល - Banteay Ampil', 'ចុងកាល់ Chong Kal', 'ក្រុងសំរោង - Krong Samraong', 'ត្រពាំងប្រាសាទ - Trapeang Prasat',
            'ដំណាក់ចង្អើរ - Damnak Chang Aeur', 'ក្រុងកែប - Krong Kep',
            'ក្រុងប៉ៃលិន - Krong Pailin', 'សាលាក្រៅ - Sala Krau',
            'ដំបែ - Dambae', 'ក្រូចឆ្មារ - Krouch Chhmar', 'មេមត - Memot', 'អូររាំងឪ - Ou Reang Ov', 'ពញាក្រែក - Ponhea Kraek', 'ក្រុងសួង - Krong Suong', 'ត្បូងឃ្មុំ - Tboung Khmum'
        ];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
