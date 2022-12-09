<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function index(){
        return view('admin.danh_gia');
    }

   public function getData(){
        $data=DanhGia::orderBy('created_at','DESC')->get();
        return response()->json([
            'status'=>'success',
            'data'=>$data,
        ]);
   }

   public function delete($id){
        $danh_gia=DanhGia::find($id);
        if($danh_gia){
            $danh_gia->delete();
            return response()->json([
                'status' =>true,
            ]);
        }
        return response()->json([
            'status'    =>false,
        ]);
   }
}
