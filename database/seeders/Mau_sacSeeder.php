<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Mau_sacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mau_sac')->insert([
            ['id'=>1,'ten_mau'=> 'red', 'hex'=>'#cc0000','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>2,'ten_mau'=> 'yellow', 'hex'=>'#ffff00','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>3,'ten_mau'=> 'blue', 'hex'=>'#2986cc','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>4,'ten_mau'=> 'Violet', 'hex'=>'#d137d1','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>5,'ten_mau'=> 'white', 'hex'=>'#ffffff','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>6,'ten_mau'=> 'black', 'hex'=>'#000000','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>7,'ten_mau'=> 'pink', 'hex'=>'#ffc0cb','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>8,'ten_mau'=> 'brown', 'hex'=>'#a52a2a','created_at'=> NULL,'updated_at'=> NULL]

        ]);
    }
}
