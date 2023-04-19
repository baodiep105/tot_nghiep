<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Don_hangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('don_hangs')->insert([
            ['id'=>13,'email'=>'namh3314@gmail.com',    'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>1, 'dia_chi'=> 'Tỉnh Bắc Giang - Huyện Lạng Giang - Xã Hương Sơn - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> 'test','loai_thanh_toan'=>0,'created_at'=> '2022-12-09 13:26:53','updated_at'=> '2023-02-17 03:32:04'],
            ['id'=>15,'email'=>'bobodiep105@gmail.com', 'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> '-  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> 'test login','loai_thanh_toan'=>0,'created_at'=> '2022-12-10 04:44:02','updated_at'=> '2022-12-10 06:53:50'],
            ['id'=>16,'email'=>'nnam44565@gmail.com',   'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> 'Thành phố Hà Nội - Quận Đống Đa -  - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> 'test no login','loai_thanh_toan'=>0,'created_at'=> '2022-12-10 05:14:27','updated_at'=> '2022-12-10 05:14:27'],
            ['id'=>17,'email'=>'namnh@tekup.vn',        'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> 'Tỉnh Hoà Bình - Huyện Lạc Sơn -  - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816', 'ghi_chu'=>'tesst','loai_thanh_toan'=>0,'created_at'=> '2022-12-10 05:16:11','updated_at'=> '2022-12-10 05:16:11'],
            ['id'=>18,'email'=>'bobodiep105@gmail.com', 'tong_tien'=>78.35, 'tien_giam_gia'=>0, 'thuc_tra'=>78.35,  'status'=>0, 'dia_chi'=> '-  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2022-12-10 05:45:05','updated_at'=> '2022-12-10 06:53:52'],
            ['id'=>19,'email'=>'namnh@tekup.vn',        'tong_tien'=>78.35, 'tien_giam_gia'=>0, 'thuc_tra'=>78.35,  'status'=>0, 'dia_chi'=> 'Tỉnh Sơn La - Huyện Bắc Yên -  - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> 'r\ntwst','loai_thanh_toan'=>0,'created_at'=> '2022-12-10 06:32:55','updated_at'=> '2022-12-10 06:32:55'],
            ['id'=>20,'email'=>'namh3314@gmail.com',    'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> '-  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - 56 Nguyễn Đăng','nguoi_nhan'=> 'Hoang Nam','sdt'=> '0772531816','ghi_chu'=> 'test','loai_thanh_toan'=>0, '2022-12-10 08:19:06','updated_at'=> '2022-12-10 08:19:06'],
            ['id'=>21,'email'=>'namh3314@gmail.com',    'tong_tien'=>313.4, 'tien_giam_gia'=>0, 'thuc_tra'=>313.4,  'status'=>0, 'dia_chi'=> '-  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - 56 Nguyễn Đăng','nguoi_nhan'=> 'Hoang Nam','sdt'=> '0772531816', 'ghi_chu'=>NULL,'loai_thanh_toan'=>0,'created_at'=> '2022-12-10 08:20:23','updated_at'=> '2022-12-10 08:20:23'],
            ['id'=>22,'email'=>'namnh@tekup.vn',        'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> 'Thành phố Đà Nẵng - Quận Thanh Khê -  - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2022-12-10 08:43:03','updated_at'=> '2022-12-10 08:43:03'],
            ['id'=>23,'email'=>'namnh@tekup.vn',        'tong_tien'=>156.7, 'tien_giam_gia'=>0, 'thuc_tra'=>156.7,  'status'=>0, 'dia_chi'=> 'Thành phố Đà Nẵng - Quận Thanh Khê -  - 368 nguyen phuoc nguyen','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2022-12-10 08:43:03','updated_at'=> '2022-12-10 08:44:35'],
            ['id'=>24,'email'=>'bobodiep105@gmail.com', 'tong_tien'=>456.8, 'tien_giam_gia'=>0, 'thuc_tra'=>456.8,  'status'=>2, 'dia_chi'=> '-  -  - -  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','nguoi_nhan'=> 'Hoang nam','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2022-12-24 06:15:41','updated_at'=> '2022-12-24 06:15:41'],
            ['id'=>25,'email'=>'bobodiep105@gmail.com', 'tong_tien'=>406.3, 'tien_giam_gia'=>0, 'thuc_tra'=>406.3,  'status'=>2, 'dia_chi'=> '-  -  - -  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','nguoi_nhan'=> 'đâsd','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2023-01-12 06:03:19','updated_at'=> '2023-01-12 06:03:19'],
            ['id'=>26,'email'=>'namhj1810@gmail.com',   'tong_tien'=>568.82,'tien_giam_gia'=> 0,'thuc_tra'=> 568.82,'status'=> 2,'dia_chi'=>  '-  -  - Tỉnh Cao Bằng - Thành phố Cao Bằng - Phường Sông Bằng - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','nguoi_nhan'=> 'Quang Nguyễn','sdt'=> '0772531816','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2023-02-04 03:51:11','updated_at'=>'2023-02-04 03:51:11'],
            ['id'=>27,'email'=>'asdasd@gmail.com',      'tong_tien'=>135.44,'tien_giam_gia'=> 0,'thuc_tra'=> 135.44,'status'=> 2,'dia_chi'=>  'Tỉnh Quảng Ninh - Huyện Vân Đồn -  - asd','nguoi_nhan'=> 'ádasd','sdt'=> '0899856105','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2023-02-04 06:27:53','updated_at'=> '2023-02-04 06:27:53'],
            ['id'=>28,'email'=>'asdasd@gmail.com',      'tong_tien'=>135.44,'tien_giam_gia'=> 0,'thuc_tra'=> 135.44,'status'=> 1,'dia_chi'=>  'Tỉnh Quảng Ninh - Huyện Vân Đồn -  - asd','nguoi_nhan'=> 'ádasd','sdt'=> '0899856105','ghi_chu'=> NULL,'loai_thanh_toan'=>0,'created_at'=> '2023-02-04 06:27:55','updated_at'=> '2023-02-04 06:32:27']
        ]);
    }
}
