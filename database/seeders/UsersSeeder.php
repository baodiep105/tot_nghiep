<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        ['id'=>18,'username'=>'bao105',  'full_name' =>'Hoang nam','sdt'=> '0772531816','email'=> 'bobodiep105@gmail.com','password'=> '$2y$10$pvNa8bioY65R3jgLCdrwgesmVeJrDgY4cbVJsihCA5NXFEXluvhRm','hash'=> 'cf7a5c3e-45e8-4ddb-8a65-2558984ca4a5','is_email'=> 1,'dia_chi'=> '-  -  - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','is_block'=> 1,'id_loai'=> 2,'reset_password'=> '5VbU88','created_at'=> '2022-12-09 05:13:04','updated_at'=> '2023-02-04 05:17:55'],
        ['id'=>22,'username'=>'nam234',  'full_name' =>'Hoang Nam','sdt'=> '0772531816','email'=> 'namh3314@gmail.com','password'=> '$2y$10$A30mv1D/xbpKu3qdt5r8j.mBtGTiaWQkLYvW7D5S5VekeOWg2qoRq','hash'=> '5d804b02-0432-40ec-97ca-2ff6adf31d20','is_email'=> 1,'dia_chi'=> 'Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - 56 Nguyễn Đăng','is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2022-12-10 08:17:13','updated_at'=> '2022-12-10 08:18:37'],
        ['id'=>31,'username'=>'quangsuki123','full_name'=> 'Quang Nguyễn','sdt'=> '0772531816','email'=> 'namhj1810@gmail.com','password'=> '$2y$10$8drvbPJ0jfbRHOEHHppHRenMwhFhWI6W0LTYszjjIiFitNpLWyGp2','hash'=> 'efdf4e82-5694-4114-a9e4-ddb2ebf219d1','is_email'=> 1,'dia_chi'=> 'Tỉnh Cao Bằng - Thành phố Cao Bằng - Phường Sông Bằng - Thành phố Đà Nẵng - Quận Thanh Khê - Phường An Khê - Thành phố Đà Nẵng','is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2022-12-24 06:42:35','updated_at'=> '2023-02-04 03:45:23'],
        ['id'=>32,'username'=>'Phạm Thị Ban Ni','full_name'=> NULL,'sdt'=> NULL,'email'=> 'phamthibanni2002@gmail.com','password'=> '$2y$10$mUIWWPo5xWPyuSmqWJ6Kj.xDk9/ZTCmdj5UgSvvPmrb3IWjB6c/XK','hash'=> '395ad415-a1af-4d1f-80b2-e2497507f911','is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2022-12-28 05:58:45','updated_at'=> '2022-12-28 06:00:19'],
        ['id'=>33,'username'=>'kieu8201','full_name'=> NULL,'sdt'=> NULL,'email'=> 'dinhthitokieu8201@gmail.com','password'=> '$2y$10$OzYU1ZFJxA6tAni0WCQEDeCFEwJ4eOfGuOrG9nL5ejM/ACOBeyAxu','hash'=> '9ece510e-6f9f-4d9e-89c9-a238f658380e','is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2022-12-28 06:17:07','updated_at'=> '2022-12-28 06:17:35'],
        ['id'=>34,'username'=>'banni1','full_name'=> NULL,'sdt'=> NULL,'email'=> NULL,'password'=> '$2y$10$yeZSIFupu.IkFHcBOEFE9egXfWDfxCk8.o6ND8cMRH..VbL8emZMm','hash'=> NULL,'is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 0,'reset_password'=> NULL,'created_at'=> '2023-01-29 11:11:18','updated_at'=> '2023-01-29 11:11:18'],
        ['id'=>35,'username'=>'baobao1','full_name'=> NULL,'sdt'=> NULL,'email'=> NULL,'password'=> '$2y$10$vCHonVLJFV3Fye5drZGaIeP5ChMBpUPCV.9DvAQBjB19qY4/L9WQG','hash'=> NULL,'is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 1,'reset_password'=> NULL,'created_at'=> '2023-01-30 10:08:52','updated_at'=> '2023-01-30 10:08:52'],
        ['id'=>41,'username'=>'Thanh123','full_name'=> NULL,'sdt'=> NULL,'email'=> 'hoangthanhwork123@gmail.com','password'=> '$2y$10$VncOV9V9gheLF1RZtjSlVuFL5wq3nrn0S8h8H8S7OcXa50tlbNjKi','hash'=> '2fbd7f16-2f66-4200-8e1f-dc1e66e5cfc1','is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2023-02-04 04:36:40','updated_at'=> '2023-02-04 04:37:04'],
        ['id'=>43,'username'=>'kienthichthu','full_name'=> NULL,'sdt'=> NULL,'email'=> 'kienn6624@gmail.com','password'=> '$2y$10$SVg8Qj/Q/s3AwHCl./FeSOs9ehcE31ryjkduSj.yN2/lnCsF.NxPa','hash'=> '380cbb7a-fd3d-4443-8d47-34f04508fdf2','is_email'=> 1,'dia_chi'=> NULL,'is_block'=> 1,'id_loai'=> 2,'reset_password'=> NULL,'created_at'=> '2023-02-17 06:50:20','updated_at'=> '2023-02-17 06:51:12'],
       ]);
    }
}
