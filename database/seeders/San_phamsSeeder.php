<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class San_phamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('san_phams')->insert([
            // $table->string('slug_san_pham');
            ['id'=>1, 'ten_san_pham'=>'Nike Vista','slug_san_pham'=> 'nike-vista','gia_ban'=> 78.35, 'brand'=>'Nike','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:46:57','updated_at'=> '2022-12-08 08:12:06'],
            ['id'=>2, 'ten_san_pham'=>'NikeOneonta','slug_san_pham'=> 'nikeoneonta','gia_ban'=> 83.73,'brand'=> 'Nike','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:47:44','updated_at'=> '2022-11-30 22:23:33'],
            ['id'=>3, 'ten_san_pham'=>'ADILETTE COMFORT SANDALS','slug_san_pham'=> 'adilette-comfort-sandals','gia_ban'=> 53.48,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:48:39','updated_at'=> '2022-11-24 09:48:39'],
            ['id'=>4, 'ten_san_pham'=>'ADILETTE SANDALS','slug_san_pham'=> 'adilette-sandals','gia_ban'=> 77.98,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:49:14','updated_at'=> '2022-11-24 09:49:14'],
            ['id'=>5, 'ten_san_pham'=>'DIOR BY BIRKENSTOCK MILANO SANDAL','slug_san_pham'=> 'dior-by-birkenstock-milano-sandal','gia_ban'=> 111.1,'brand'=> 'Dior','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:50:07','updated_at'=> '2022-11-24 09:50:07'],
            ['id'=>6, 'ten_san_pham'=>'DIORACT SANDAL','slug_san_pham'=> 'dioract-sandal','gia_ban'=> 127.23,'brand=>'=>'Dior','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 1,'is_open'=> 1,'created_at'=> '2022-11-24 09:50:48','updated_at'=> '2022-11-24 09:50:48'],
            ['id'=>7, 'ten_san_pham'=>'OPYUM SLINGBACK PUMPS','slug_san_pham'=> 'opyum-slingback-pumps','gia_ban'=> 172.46,'brand'=> 'YSL','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 2,'is_open'=> 1,'created_at'=> '2022-11-24 09:52:17','updated_at'=> '2022-11-24 09:52:17'],
            ['id'=>8, 'ten_san_pham'=>'CLAW SLINGBACK PUMPS','slug_san_pham'=> 'claw-slingback-pumps','gia_ban'=> 188.88,'brand'=> 'YSL','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 2,'is_open'=> 1,'created_at'=> '2022-11-24 09:53:10','updated_at'=> '2022-11-24 09:53:10'],
            ['id'=>9, 'ten_san_pham'=>'DIOR ATTRACT HEELED ANKLE BOOT','slug_san_pham'=> 'dior-attract-heeled-ankle-boot','gia_ban'=> 176.56,'brand'=> 'Dior','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 2,'is_open'=> 1,'created_at'=> '2022-11-24 09:53:53','updated_at'=> '2022-11-24 09:53:53'],
            ['id'=>10,'ten_san_pham'=> 'DIOR IDYLLE BALLET PUMP','slug_san_pham'=> 'dior-idylle-ballet-pump','gia_ban'=> 176.48,'brand'=> 'Dior','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 2,'is_open'=> 1,'created_at'=> '2022-11-24 09:54:34','updated_at'=> '2022-11-24 09:54:34'],
            ['id'=>12,'ten_san_pham'=> 'Pedro','slug_san_pham'=> 'pedro','gia_ban'=> 90.29,'brand'=> 'Pedro','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 3,'is_open'=> 1,'created_at'=> '2022-11-24 09:55:50','updated_at'=> '2022-11-24 09:55:50'],
            ['id'=>14,'ten_san_pham'=> 'Gucci Interlocking G Brown  698804-2VA30-9568','slug_san_pham'=> 'gucci-interlocking-g-brown-698804-2va30-9568','gia_ban'=> 504.82,'brand'=> 'Gucci','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 3,'is_open'=> 1,'created_at'=> '2022-11-24 09:58:59','updated_at'=> '2022-11-24 09:58:59'],
            ['id'=>15,'ten_san_pham'=> 'Gucci Men Lace up-643621-06F00-1000','slug_san_pham'=> 'gucci-men-lace-up-643621-06f00-1000','gia_ban'=> 381.7,'brand'=> 'Gucci','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 3,'is_open'=> 1,'created_at'=> '2022-11-24 09:59:44','updated_at'=> '2022-11-24 09:59:44'],
            ['id'=>17,'ten_san_pham'=> 'FIVE TEN TRAIL CROSS MID PRO MOUNTAIN_BIKE SHOES','slug_san_pham'=> 'five-ten-trail-cross-mid-pro-mountain-bike-shoes','gia_ban'=> 289.35,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp', 'mo_ta_chi_tiet'=>'rất đẹp', 'id_danh_muc'=>24,'is_open'=> 1,'created_at'=> '2022-11-24 10:01:52','updated_at'=> '2022-11-24 10:01:52'],
            ['id'=>18,'ten_san_pham'=> 'NIZZA HI ADV SHOES','slug_san_pham'=> 'nizza-hi-adv-shoes','gia_ban'=> 166.22,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp', 'mo_ta_chi_tiet'=>'rất đẹp', 'id_danh_muc'=>24,'is_open'=> 1,'created_at'=> '2022-11-24 10:02:40','updated_at'=> '2022-11-24 10:02:40'],
            ['id'=>20,'ten_san_pham'=> 'NIZZA  HIRF X ANDRE SARAIVA SHOES','slug_san_pham'=> 'nizza-hirf-x-andre-saraiva-shoes','gia_ban'=> 658.73,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp', 'mo_ta_chi_tiet'=>'rất đẹp', 'id_danh_muc'=>24,'is_open'=> 1,'created_at'=> '2022-11-24 10:04:30','updated_at'=> '0000-00-00 00:00:00'],
            ['id'=>21,'ten_san_pham'=> 'FORUM 84 HIGH SHOES','slug_san_pham'=> 'forum-84-high-shoes','gia_ban'=> 125.18,'brand'=> 'Adidas','mo_ta_ngan'=> 'đẹp', 'mo_ta_chi_tiet'=>'rất đẹp', 'id_danh_muc'=>24,'is_open'=> 1,'created_at'=> '2022-11-24 10:05:03','updated_at'=> '2022-11-24 10:05:03'],
            ['id'=>22,'ten_san_pham'=> 'Lebron 19 Tropical','slug_san_pham'=> 'lebron-19-tropical','gia_ban'=> 740.82,'brand'=> 'Nike','mo_ta_ngan'=> 'đẹp', 'mo_ta_chi_tiet'=>'rất đẹp', 'id_danh_muc'=>24,'is_open'=> 1,'created_at'=> '2022-11-24 10:06:06','updated_at'=> '2022-11-24 10:06:06'],
            ['id'=>23,'ten_san_pham'=> 'TimberlandMid-topShock AbsorbingA5UN5931 4','slug_san_pham'=> 'timberlandmid-topshock-absorbinga5un5931-4','gia_ban'=> 252.41,'brand'=> 'Dior','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:08:17','updated_at'=> '2022-11-24 10:08:17'],
            ['id'=>24,'ten_san_pham'=> 'Giày Sneaker Nam Nike Jordan1 Mid554724-170-University Gold','slug_san_pham'=> 'giay-sneaker-nam-nike-jordan1-mid554724-170-university-gold','gia_ban'=> 576.65,'brand'=> 'Nike','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:09:34','updated_at'=> '2022-11-24 10:09:34'],
            ['id'=>25,'ten_san_pham'=> 'Giày Saint Laurent Court Classic SL39 Mid-Top Canvas and Leather 67152312NA09026','slug_san_pham'=> 'giay-saint-laurent-court-classic-sl39-mid-top-canvas-and-leather-67152312na09026','gia_ban'=> 576.65,'brand'=> 'YSL','mo_ta_ngan'=>'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:11:34','updated_at'=> '2022-11-24 10:11:34'],
            ['id'=>26,'ten_san_pham'=> 'Giày Saint Laurent SL24 Mid-Top Leather White 61061804GA09298','slug_san_pham'=> 'giay-saint-laurent-sl24-mid-top-leather-white-61061804ga09298','gia_ban'=> 699.77,'brand'=> 'YSL', 'mo_ta_ngan'=>'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:12:12','updated_at'=> '2022-11-24 10:12:12'],
            ['id'=>27,'ten_san_pham'=> 'Giày Gucci Ladies Ultrapace Mid-Top 598987-0PVZ0-3185','slug_san_pham'=> 'giay-gucci-ladies-ultrapace-mid-top-598987-0pvz0-3185','gia_ban'=> 289.35,'brand'=> 'YSL','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:12:52','updated_at'=> '2022-11-24 10:12:52'],
            ['id'=>28,'ten_san_pham'=> 'GIÀY SNEAKER NAM C13 GREY DINCOX','slug_san_pham'=> 'giay-sneaker-nam-c13-grey-dincox','gia_ban'=> 125.18,'brand'=> 'DINCOX','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 6,'is_open'=> 1,'created_at'=> '2022-11-24 10:15:08','updated_at'=> '2022-11-24 10:15:08'],
            ['id'=>29,'ten_san_pham'=> 'Giày Sneaker Unisex Vans Old School 36 DX VN0A38G2PXC','slug_san_pham'=> 'giay-sneaker-unisex-vans-old-school-36-dx-vn0a38g2pxc','gia_ban'=> 84.14,'brand'=> 'Vans','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 5,'is_open'=> 1,'created_at'=> '2022-11-24 10:16:10','updated_at'=> '2022-11-24 10:16:10'],
            ['id'=>30,'ten_san_pham'=> 'Giày Sneaker Unisex Authentic Vans - VN000EE3BKA','slug_san_pham'=> 'giay-sneaker-unisex-authentic-vans-vn000ee3bka','gia_ban'=> 75.93,'brand'=> 'Vans','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 5,'is_open'=> 1,'created_at'=> '2022-11-24 10:16:43','updated_at'=> '2022-11-24 10:16:43'],
            ['id'=>31,'ten_san_pham'=> 'Giày Sneaker Unisex Old School Vans - VN000D3HNVY','slug_san_pham'=> 'giay-sneaker-unisex-old-school-vans-vn000d3hnvy','gia_ban'=> 67.72,'brand'=> 'Vans','mo_ta_ngan'=> 'đẹp','mo_ta_chi_tiet'=> 'rất đẹp','id_danh_muc'=> 5,'is_open'=> 1,'created_at'=> '2022-11-24 10:17:27','updated_at'=> '2022-11-24 10:17:27'],
            ['id'=>32,'ten_san_pham'=> 'Giày Sneaker Unisex Converse Chuck Taylor All Star 1970s Sunflower Low Top 162063C','slug_san_pham'=> 'giay-sneaker-unisex-converse-chuck-taylor-all-star-1970s-sunflower-low-top-162063c','gia_ban'=> 81.26,'brand'=> 'Vans','mo_ta_ngan'=> 'rất đẹp','mo_ta_chi_tiet'=> 'Rất đẹp','id_danh_muc'=> 5,'is_open'=> 1,'created_at'=> '2022-11-24 10:18:33','updated_at'=> '2023-02-17 03:13:15'],
        ]);
    }
}
