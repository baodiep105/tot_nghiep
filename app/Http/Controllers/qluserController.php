<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class qluserController extends Controller
{
    public function index(){
        return view('admin.ql_user');
    }

    public function getData(){
        $user=User::where('id_loai',2)->get();
        return response()->json([
           'user'=>$user,
        ]);
    }

    public function changeStatus($id){
        $user = User::find($id);
        if($user) {
            // $san_pham->is_block = !$san_pham->is_open;
            if($user->is_block == 1) {
                $user->is_block = 0;
            } else {
                $user->is_block = 1;
            }
            $user->save();
            return response()->json(['status' => true]);
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        if($user) {
            $user->delete();
            return response()->json(['status' => true]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function search(Request $request)
    {
        if($request->all()==null){
            $data=user::all();
        }
        $data = User::where('username', 'like', '%' . $request->search .'%')->orWhere('email', 'like', '%' . $request->search .'%')
                      ->get();

        return response()->json(['data' => $data]);
    }
}
