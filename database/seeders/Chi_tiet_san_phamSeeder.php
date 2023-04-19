<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Chi_tiet_san_phamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_san_pham')->insert([
            ['id'=> 1, 'id_sanpham'=>1,  'id_mau'=>1,'id_size'=>1,  'sl_chi_tiet'=>40, 'status'=> 1, 'created_at'=>'2022-11-25 07:37:31','updated_at'=> '2022-12-10 08:43:03'],
            ['id'=> 2, 'id_sanpham'=>1,  'id_mau'=>5,'id_size'=>1,  'sl_chi_tiet'=>27, 'status'=> 1, 'created_at'=>'2022-11-25 07:46:10','updated_at'=> '2022-12-06 17:18:44'],
            ['id'=> 3, 'id_sanpham'=>1,  'id_mau'=>6,'id_size'=>1,  'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-11-25 07:46:37','updated_at'=> '2022-11-25 07:46:37'],
            ['id'=> 4, 'id_sanpham'=>1,  'id_mau'=>6,'id_size'=>3,  'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-11-25 07:47:05','updated_at'=> '2022-11-25 07:47:05'],
            ['id'=> 5, 'id_sanpham'=>1,  'id_mau'=>5,'id_size'=>3,  'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-11-25 07:47:17','updated_at'=> '2022-11-25 07:47:17'],
            ['id'=> 6, 'id_sanpham'=>1,  'id_mau'=>1,'id_size'=>3,  'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-11-25 07:47:25','updated_at'=> '2022-12-06 16:17:06'],
            ['id'=> 7, 'id_sanpham'=>2,  'id_mau'=>1,'id_size'=>14, 'sl_chi_tiet'=>45, 'status'=> 1, 'created_at'=>'2022-11-30 20:56:03','updated_at'=> '2023-02-01 13:23:40'],
            ['id'=> 8, 'id_sanpham'=>2,  'id_mau'=>2,'id_size'=> 15,'sl_chi_tiet'=>34, 'status'=> 1, 'created_at'=>'2022-12-21 07:24:22','updated_at'=> '2022-12-21 07:24:22'],
            ['id'=> 9, 'id_sanpham'=>3,  'id_mau'=>4,'id_size'=> 16,'sl_chi_tiet'=>35, 'status'=> 1, 'created_at'=>'2022-12-21 07:24:48','updated_at'=> '2022-12-21 07:24:48'],
            ['id'=> 10,'id_sanpham'=> 7, 'id_mau'=>6,'id_size'=> 16,'sl_chi_tiet'=>35, 'status'=> 1, 'created_at'=>'2022-12-21 07:25:03','updated_at'=> '2022-12-21 07:25:08'],
            ['id'=> 11,'id_sanpham'=> 14,'id_mau'=>6,'id_size'=> 3, 'sl_chi_tiet'=>35, 'status'=> 1, 'created_at'=>'2022-12-21 07:25:18','updated_at'=> '2022-12-21 07:25:47'],
            ['id'=> 12,'id_sanpham'=> 22,'id_mau'=>2,'id_size'=> 14,'sl_chi_tiet'=>39, 'status'=> 1, 'created_at'=>'2022-12-21 07:25:44','updated_at'=> '2022-12-21 07:25:44'],
            ['id'=> 13,'id_sanpham'=> 9, 'id_mau'=>5,'id_size'=> 11,'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-12-21 07:26:11','updated_at'=> '2022-12-21 07:26:11'],
            ['id'=> 14,'id_sanpham'=> 17,'id_mau'=>7,'id_size'=> 16,'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-12-21 07:26:24','updated_at'=> '2022-12-21 07:26:24'],
            ['id'=> 15,'id_sanpham'=> 27,'id_mau'=>8,'id_size'=> 11,'sl_chi_tiet'=>50, 'status'=> 1, 'created_at'=>'2022-12-21 07:26:38','updated_at'=> '2022-12-21 07:26:38'],
            ['id'=> 16,'id_sanpham'=> 31,'id_mau'=>1,'id_size'=> 15,'sl_chi_tiet'=>45, 'status'=> 1, 'created_at'=>'2022-12-21 07:26:57','updated_at'=> '2023-02-04 06:27:55'],
            ['id'=> 17,'id_sanpham'=> 26,'id_mau'=>1,'id_size'=> 6, 'sl_chi_tiet'=>49, 'status'=> 1, 'created_at'=>'2022-12-21 07:27:10','updated_at'=> '2022-12-21 07:27:10'],
            ['id'=> 18,'id_sanpham'=> 30,'id_mau'=>7,'id_size'=> 12,'sl_chi_tiet'=>23, 'status'=> 1, 'created_at'=>'2022-12-21 07:27:29','updated_at'=> '2022-12-21 07:27:29'],
            ['id'=> 20,'id_sanpham'=> 26,'id_mau'=>2,'id_size'=> 4, 'sl_chi_tiet'=>20, 'status'=> 1, 'created_at'=>'2022-12-21 07:28:01','updated_at'=> '2022-12-21 07:28:01'],
            ['id'=> 21,'id_sanpham'=> 7, 'id_mau'=>1,'id_size'=> 11,'sl_chi_tiet'=>21, 'status'=> 1, 'created_at'=>'2022-12-21 07:28:14','updated_at'=> '2022-12-21 07:28:14'],
            ['id'=> 22,'id_sanpham'=> 29,'id_mau'=>1,'id_size'=> 13,'sl_chi_tiet'=>21, 'status'=> 1, 'created_at'=>'2022-12-21 07:28:24','updated_at'=> '2022-12-21 07:28:24'],
            ['id'=> 23,'id_sanpham'=> 8, 'id_mau'=>7,'id_size'=> 15,'sl_chi_tiet'=>28, 'status'=> 1, 'created_at'=>'2022-12-21 07:28:41','updated_at'=> '2022-12-21 07:28:41'],
            ['id'=> 24,'id_sanpham'=> 14,'id_mau'=>3,'id_size'=> 11,'sl_chi_tiet'=>27, 'status'=> 1, 'created_at'=>'2022-12-21 07:28:56','updated_at'=> '2022-12-21 07:28:56'],
            ['id'=> 25,'id_sanpham'=> 24,'id_mau'=>7,'id_size'=> 6, 'sl_chi_tiet'=>20, 'status'=> 1, 'created_at'=>'2022-12-21 07:29:10','updated_at'=> '2022-12-21 07:29:10'],
            ['id'=> 26,'id_sanpham'=> 2, 'id_mau'=>1,'id_size'=> 11,'sl_chi_tiet'=>29, 'status'=> 1, 'created_at'=>'2022-12-21 07:29:22','updated_at'=> '2022-12-21 07:29:22'],
            ['id'=> 27,'id_sanpham'=> 5, 'id_mau'=>3,'id_size'=> 14,'sl_chi_tiet'=>9,  'status'=> 1, 'created_at'=>'2022-12-21 07:29:37','updated_at'=> '2022-12-21 07:29:37'],
            ['id'=> 28,'id_sanpham'=> 15,'id_mau'=>6,'id_size'=> 8, 'sl_chi_tiet'=>44, 'status'=> 1, 'created_at'=>'2022-12-21 07:29:54','updated_at'=> '2022-12-21 07:29:54'],
            ['id'=> 29,'id_sanpham'=> 26,'id_mau'=>3,'id_size'=> 11,'sl_chi_tiet'=>41, 'status'=> 1, 'created_at'=>'2022-12-21 07:30:09','updated_at'=> '2022-12-21 07:30:09'],
            ['id'=> 30,'id_sanpham'=> 28,'id_mau'=>3,'id_size'=> 11,'sl_chi_tiet'=>38, 'status'=> 1, 'created_at'=>'2022-12-21 07:31:28','updated_at'=> '2022-12-24 06:15:41'],
            ['id'=> 31,'id_sanpham'=> 12,'id_mau'=>2,'id_size'=> 1, 'sl_chi_tiet'=>21, 'status'=> 1, 'created_at'=>'2022-12-21 07:33:37','updated_at'=> '2022-12-21 07:33:37'],
            ['id'=> 32,'id_sanpham'=> 10,'id_mau'=>5,'id_size'=> 2, 'sl_chi_tiet'=>23, 'status'=> 1, 'created_at'=>'2022-12-21 07:33:55','updated_at'=> '2022-12-21 07:33:55'],
            ['id'=> 33,'id_sanpham'=> 22,'id_mau'=>5,'id_size'=> 2, 'sl_chi_tiet'=>23, 'status'=> 1, 'created_at'=>'2022-12-21 07:34:11','updated_at'=> '2022-12-21 07:34:11'],
            ['id'=> 34,'id_sanpham'=> 21,'id_mau'=>7,'id_size'=> 4, 'sl_chi_tiet'=>31, 'status'=> 1, 'created_at'=>'2022-12-21 07:34:42','updated_at'=> '2022-12-21 07:34:42'],
            ['id'=> 35,'id_sanpham'=> 7, 'id_mau'=>8,'id_size'=> 2, 'sl_chi_tiet'=>32, 'status'=> 1, 'created_at'=>'2022-12-21 07:35:17','updated_at'=> '2022-12-21 07:53:10'],
            ['id'=> 36,'id_sanpham'=> 18,'id_mau'=>7,'id_size'=> 2, 'sl_chi_tiet'=>32, 'status'=> 1, 'created_at'=>'2022-12-21 07:35:52','updated_at'=> '2022-12-21 07:35:52'],
            ['id'=> 37,'id_sanpham'=> 23,'id_mau'=>5,'id_size'=> 6, 'sl_chi_tiet'=>11, 'status'=> 1, 'created_at'=>'2022-12-21 07:36:25','updated_at'=> '2022-12-21 07:36:25'],
            ['id'=> 38,'id_sanpham'=> 21,'id_mau'=>2,'id_size'=> 13,'sl_chi_tiet'=>55, 'status'=> 1, 'created_at'=>'2022-12-21 07:39:43','updated_at'=> '2023-02-01 13:23:34'],
            ['id'=> 39,'id_sanpham'=> 1, 'id_mau'=>2,'id_size'=> 7, 'sl_chi_tiet'=>29, 'status'=> 1, 'created_at'=>'2022-12-21 07:40:17','updated_at'=> '2022-12-21 07:52:55'],
            ['id'=> 40,'id_sanpham'=> 32,'id_mau'=>1,'id_size'=> 5, 'sl_chi_tiet'=>185,'status'=>  1,'created_at'=> '2022-12-24 06:10:43','updated_at'=> '2023-02-04 07:46:47'],
            ['id'=> 41,'id_sanpham'=> 5, 'id_mau'=>2,'id_size'=> 4, 'sl_chi_tiet'=>124,'status'=>  1,'created_at'=> '2023-02-04 04:44:03','updated_at'=> '2023-02-04 04:50:41'],
            ['id'=> 42,'id_sanpham'=> 32,'id_mau'=>2,'id_size'=> 1, 'sl_chi_tiet'=>26, 'status'=> 1, 'created_at'=>'2023-02-04 04:52:25','updated_at'=> '2023-02-04 07:46:47'],
            ['id'=> 43,'id_sanpham'=> 32,'id_mau'=>3,'id_size'=> 1, 'sl_chi_tiet'=>123,'status'=>  1,'created_at'=> '2023-02-04 04:52:36','updated_at'=> '2023-02-04 04:52:36']
        ]);
    }
}
