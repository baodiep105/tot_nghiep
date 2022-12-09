<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function login(Request $request){
        $validator =  Validator::make($request->all(),[
                    'username'      =>  'required',
                    'password'     =>  'required',
                ],[
                    'required'      =>  ':attribute không được để trống',
                ]);
        

    }
}
