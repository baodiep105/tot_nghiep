<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class SendMailController extends Controller
{
    public function sendMail(){
        $mail='bobodiep105@gmail.com';
        $username='baobao105';
        $hash=Str::uuid();
        // $sendmail=new S
        Mail::to($mail)->send(new SendMail(
            $username,
            $hash,
            'Kích Hoạt Tài Khoảng Người Dùng',
        ));
    }
}
