<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            ['id'=>1,'banner_1'=>'/photos/shares/giay_tay/Gucci_Interlocking_G_Brown_‎698804_2VA30_9568_2.jpg','banner_2'=>'/photos/shares/high_top/FIVE_TEN_TRAIL_CROSS_MID_PRO_MOUNTAIN_BIKE_SHOES_3.jpg','banner_3'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_1.jpg','banner_4'=> '/photos/shares/cao_got/CLAW_SLINGBACK_PUMPS_1.jpg','banner_5'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_4.jpg','is_open'=> 0,'created_at'=> '2022-11-29 21:56:05','updated_at'=> '2023-02-17 07:12:06'],
            ['id'=>3,'banner_1'=>'/photos/shares/giay_tay/Gucci_Interlocking_G _Brown_698804_2VA30_9568_1.jpg','banner_2'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_1.jpg','banner_3'=> '/photos/shares/high_top/FORUM_84_HIGH_SHOES_2.jpg','banner_4'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_1.jpg','banner_5'=> '/photos/shares/mid_top/GiaySneakerNamNikeJordan1Mid554724_170University Gold_4.jpg','is_open'=> 0,'created_at'=> '2022-11-30 01:32:20','updated_at'=> '2023-02-17 07:12:43'],
            ['id'=>4,'banner_1'=>'/photos/shares/cao_got/CLAW_SLINGBACK_PUMPS_1.jpg','banner_2'=> '/photos/shares/giay_tay/Gucci_Interlocking_G_Brown_‎698804_2VA30_9568_2.jpg','banner_3'=> '/photos/shares/high_top/FIVE_TEN_TRAIL_CROSS_MID_PRO_MOUNTAIN_BIKE_SHOES_3.jpg','banner_4'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_1.jpg','banner_5'=> '/photos/shares/low_top/GIÀY SNEAKER NAM C13 GREY DINCOX_3.png','is_open'=> 0,'created_at'=>  '2022-11-30 22:41:55','updated_at' =>'2023-02-17 07:12:42'],
            ['id'=>6,'banner_1'=>'/photos/shares/giay_tay/Gucci_Interlocking_G_Brown_‎698804_2VA30_9568_2.jpg','banner_2'=> '/photos/shares/sandal/ADILETTE_SANDALS_2.jpg','banner_3'=> '/photos/shares/low_top/GIÀY SNEAKER NAM C13 GREY DINCOX_3.png','banner_4'=> '/photos/shares/mid_top/Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185_4.jpg','banner_5'=> NULL,'is_open'=> 1,'created_at'=>  '2022-12-01 11:06:28','updated_at'=>'2023-02-17 07:12:40']

            // ['banner_1' => 'Điện thoại', 'slug_danh_muc' => 'dien-thoai', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Laptop', 'slug_danh_muc' => 'laptop', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'PC', 'slug_danh_muc' => 'pc', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Đồng hồ', 'slug_danh_muc' => 'dong-ho', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Tai nghe', 'slug_danh_muc' => 'tai-nghe', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Điện thoại Apple', 'slug_danh_muc' => 'dien-thoai-apple', 'hinh_anh' => '', 'id_danh_muc_cha' => 1, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Điện thoại SamSung', 'slug_danh_muc' => 'dien-thoai-samsung', 'hinh_anh' => '', 'id_danh_muc_cha' => 1, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Laptop Asus', 'slug_danh_muc' => 'laptop-asus', 'hinh_anh' => '', 'id_danh_muc_cha' => 2, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Laptop Dell', 'slug_danh_muc' => 'laptop-dell', 'hinh_anh' => '', 'id_danh_muc_cha' => 2, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'PC HP', 'slug_danh_muc' => 'pc-hp', 'hinh_anh' => '', 'id_danh_muc_cha' => 3, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'PC Lenovo', 'slug_danh_muc' => 'pc-lenovo', 'hinh_anh' => '', 'id_danh_muc_cha' => 3, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Đồng hồ Xiaomi', 'slug_danh_muc' => 'dong-ho-xiaomi', 'hinh_anh' => '', 'id_danh_muc_cha' => 4, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Đồng hồ Apple', 'slug_danh_muc' => 'dong-ho-apple', 'hinh_anh' => '', 'id_danh_muc_cha' => 4, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Tai nghe Sony', 'slug_danh_muc' => 'tai-nghe-sony', 'hinh_anh' => '', 'id_danh_muc_cha' => 5, 'is_delete' => 0, 'is_open' => 1 ],
            // ['ten_danh_muc' => 'Tai nghe SamSung', 'slug_danh_muc' => 'tai-nghe-samsung', 'hinh_anh' => '', 'id_danh_muc_cha' => 5, 'is_delete' => 0, 'is_open' => 1 ],
        ]);

    }
}
