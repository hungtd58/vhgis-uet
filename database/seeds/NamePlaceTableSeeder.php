<?php

use Illuminate\Database\Seeder;

class NamePlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {       
	    $years1 = array(767, 1010, 1397, 1408, 1427, 1787, 1805, 1831);
	    $name1 = array("Đại La", "Thăng Long", "Đông Đô", "Đông Quan", "Đông Kinh", "Bắc Thành", "Thăng Long", "Hà Nội");

        for($i = 0; $i < sizeof($years1); $i++)
            DB::table('name_places')->insert([
                'place_id' => 1,
                'year' => $years1[$i],
                'name' => $name1[$i]
        ]);

        $years2 = array(968, 1029, 1242, 1397, 1466, 1802, 1841);
        $name2 = array("Ái Châu", "Phủ Thanh Hóa", "Thanh Hóa phủ lộ", "Trấn Thanh Đô", "Thừa Tuyên Thanh Hóa", "Trấn Thanh Hoa", "Thanh Hóa");
        for($i = 0; $i < sizeof($years2); $i++)
            DB::table('name_places')->insert([
                'place_id' => 2,
                'year' => $years2[$i],
                'name' => $name2[$i]
        ]);
    }
}
