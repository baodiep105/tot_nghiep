<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Danh_muc_san_phamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danh_muc_san_phams')->insert([
            ['id'=>1, 'ten_danh_muc'=>'sandal','slug_danh_muc'=>'sandal','hinh_anh'=>'/photos/shares/sandal/Nike_Oneonta_3.jpg','id_danh_muc_cha'=>0,'is_open'=> 1,'created_at'=> '2022-11-24 06:47:56','updated_at'=> '2022-11-30 22:13:56'],
            ['id'=>2, 'ten_danh_muc'=>'pump','slug_danh_muc'=>'pump','hinh_anh'=>'/photos/shares/cao_got/DIOR_ATTRACT_HEELED_ANKLE_BOOT_1.jpg','id_danh_muc_cha'=>0,'is_open'=> 1,'created_at'=> '2022-11-24 06:48:22','updated_at'=> '2022-11-29 02:49:40'],
            ['id'=>2, 'ten_danh_muc'=>'pump','slug_danh_muc'=>'pump','hinh_anh'=>'/photos/shares/cao_got/DIOR_ATTRACT_HEELED_ANKLE_BOOT_1.jpg','id_danh_muc_cha'=>0,'is_open'=> 1,'created_at'=> '2022-11-24 06:48:22','updated_at'=> '2022-11-29 02:49:40'],
            ['id'=>5, 'ten_danh_muc'=>'Low top','slug_danh_muc'=>'low-top','hinh_anh'=>'/photos/shares/low_top/GIÀY SNEAKER NAM C13 GREY DINCOX_4.png','id_danh_muc_cha'=>0,'is_open'=> 1,'created_at'=> '2022-11-24 06:52:57','updated_at'=> '2022-11-29 02:52:30'],
            ['id'=>6, 'ten_danh_muc'=>'Mid Top','slug_danh_muc'=>'mid-top','hinh_anh'=>'/photos/shares/mid_top/GiaySneakerNamNikeJordan1Mid554724_170University Gold_4.jpg','id_danh_muc_cha'=> 0,'is_open'=> 1,'created_at'=> '2022-11-24 06:53:16','updated_at'=> '2022-11-29 02:52:55'],
            ['id'=>24,'ten_danh_muc'=>'Hight top','slug_danh_muc'=>'hight-top','hinh_anh'=> '/photos/shares/high_top/FORUM_MID_SHOES_2.jpg','id_danh_muc_cha'=> 0, 'is_open'=>1,'created_at'=> '2022-11-30 22:13:53','updated_at'=> '2022-12-08 09:43:15']
        ]);
    }
}
