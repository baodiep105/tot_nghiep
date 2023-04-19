<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->insert([
            ['id'=>1, 'size'=>'34-35','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>2, 'size'=>'35','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>3, 'size'=>'35-36','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>4, 'size'=>'36','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>5, 'size'=>'36-37','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>6, 'size'=>'37','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>7, 'size'=>'37-38','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>8, 'size'=>'38','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>10,'size'=> '39','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>11,'size'=> '39-40','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>12,'size'=> '40','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>13,'size'=> '40-41','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>14,'size'=> '41','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>15,'size'=> '41-42','created_at'=> NULL,'updated_at'=> NULL],
            ['id'=>16,'size'=> '42','created_at'=> NULL,'updated_at'=> NULL],

        ]);
    }
}
