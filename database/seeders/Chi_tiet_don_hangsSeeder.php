<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Chi_tiet_don_hangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_don_hangs')->insert([
            ['id'=>5, 'chi_tiet_san_pham_id'=>1, 'so_luong'=>1,'don_gia'=> 78.35,'don_hang_id'=> 13,'created_at'=> '2022-12-09 13:26:53','updated_at'=> '2022-12-09 13:26:53'],
            ['id'=>6, 'chi_tiet_san_pham_id'=>2, 'so_luong'=>1,'don_gia'=> 78.35,'don_hang_id'=> 13,'created_at'=> '2022-12-09 13:26:53','updated_at'=> '2022-12-09 13:26:53'],
            ['id'=>7, 'chi_tiet_san_pham_id'=>1, 'so_luong'=>2,'don_gia'=> 78.35,'don_hang_id'=> 15,'created_at'=> '2022-12-10 04:44:02','updated_at'=> '2022-12-10 04:44:02'],
            ['id'=>8, 'chi_tiet_san_pham_id'=>1, 'so_luong'=>2,'don_gia'=> 78.35,'don_hang_id'=> 16,'created_at'=> '2022-12-10 05:14:27','updated_at'=> '2022-12-10 05:14:27'],
            ['id'=>9, 'chi_tiet_san_pham_id'=>1, 'so_luong'=>1,'don_gia'=> 78.35,'don_hang_id'=> 18,'created_at'=> '2022-12-10 05:45:05','updated_at'=> '2022-12-10 05:45:05'],
            ['id'=>10,'chi_tiet_san_pham_id'=> 1, 'so_luong'=>1,'don_gia'=> 78.35,'don_hang_id'=> 19,'created_at'=> '2022-12-10 06:32:55','updated_at'=> '2022-12-10 06:32:55'],
            ['id'=>11,'chi_tiet_san_pham_id'=> 1, 'so_luong'=>2,'don_gia'=> 78.35,'don_hang_id'=> 20,'created_at'=> '2022-12-10 08:19:06','updated_at'=> '2022-12-10 08:19:06'],
            ['id'=>12,'chi_tiet_san_pham_id'=> 1, 'so_luong'=>4,'don_gia'=> 78.35,'don_hang_id'=> 21,'created_at'=> '2022-12-10 08:20:23','updated_at'=> '2022-12-10 08:20:23'],
            ['id'=>13,'chi_tiet_san_pham_id'=> 1, 'so_luong'=>2,'don_gia'=> 78.35,'don_hang_id'=> 22,'created_at'=> '2022-12-10 08:43:03','updated_at'=> '2022-12-10 08:43:03'],
            ['id'=>14,'chi_tiet_san_pham_id'=> 1, 'so_luong'=>2,'don_gia'=> 78.35,'don_hang_id'=> 23,'created_at'=> '2022-12-10 08:43:03','updated_at'=> '2022-12-10 08:43:03'],
            ['id'=>15,'chi_tiet_san_pham_id'=> 30, 'so_luong'=>3,'don_gia'=> 125.18,'don_hang_id'=>24,'created_at'=> '2022-12-24 06:15:41','updated_at'=> '2022-12-24 06:15:41'],
            ['id'=>16,'chi_tiet_san_pham_id'=> 40, 'so_luong'=>1,'don_gia'=> 81.26, 'don_hang_id'=>24,'created_at'=> '2022-12-24 06:15:41','updated_at'=> '2022-12-24 06:15:41'],
            ['id'=>17,'chi_tiet_san_pham_id'=> 40, 'so_luong'=>5,'don_gia'=> 81.26, 'don_hang_id'=>25,'created_at'=> '2023-01-12 06:03:19','updated_at'=> '2023-01-12 06:03:19'],
            ['id'=>18,'chi_tiet_san_pham_id'=> 40, 'so_luong'=>7,'don_gia'=> 81.26, 'don_hang_id'=>26,'created_at'=> '2023-02-04 03:51:11','updated_at'=> '2023-02-04 03:51:11'],
            ['id'=>19,'chi_tiet_san_pham_id'=> 16, 'so_luong'=>2,'don_gia'=> 67.72, 'don_hang_id'=>27,'created_at'=> '2023-02-04 06:27:53','updated_at'=> '2023-02-04 06:27:53'],
            ['id'=>20,'chi_tiet_san_pham_id'=> 16,'so_luong'=> 2,'don_gia'=> 67.72,'don_hang_id'=> 28,'created_at'=> '2023-02-04 06:27:55','updated_at'=>'2023-02-04 06:27:55']
        ]);

    }
}
