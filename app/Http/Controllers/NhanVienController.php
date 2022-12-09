<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Users;

class NhanVienController extends Controller
{
    public function index(){
        return view('admin.ql_nhan_vien');
    }

    public function getData(){
        $user=User::where('id_loai',1)->get();
        return response()->json([
           'user'=>$user,
        ]);
    }

    public function create(Request $request){
        $rules = [
            'username'  => 'required|unique:users,username',
            'password'  => 'required|min:6',
            're_password'=>'required|same:password'
        ];

        $input     = $request->all();

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'error' => $validator->errors()]);
        }
        $username = $request->username;
        $password = $request->password;
        $user     = User::create(['username' => $username,'password' =>bcrypt($password),'id_loai'=>1]);

        if($user) {
            return response()->json([
                'status' => true,
            ]);
        }
    }

    public function login(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $user = Auth::user();
            return response()->json([
              'status' => 'success',
              'user'  => $user,
            ]);
          } else {
            return response()->json([
              'status' => 'error',
              'message' => 'Unauthorized Access'
            ]);
          }
    }
    public function logout()
    {
        Auth::guard("web")->logout();
        return response()->json([

            'status'    => 1,
            'message'   => 'User Logout',

        ], 200);
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

    public function update(Request $request)
    {
        $user = User::find($request->id);
            if($user) {
                $rules = [
                    'password'  => 'required|min:6',
                    're_password'=>'required|same:password'
                ];

                $input     = $request->all();

                $validator = Validator::make($input, $rules);

                if ($validator->fails()) {
                    return response()->json(['success' => false, 'error' => $validator->errors()]);
                }

                $password = $request->password;
                $user->update([
                    'password'=>$password,
                ]);
                return response()->json([
                    'success' => 'chỉnh sửa Thành công!',
                ]);
            }
        }

    public function edit($id)
    {

        $san_pham = SanPham::find($id);
        if($san_pham) {
            return response()->json([
                'status'  =>  true,
                'san_pham' => $san_pham,
            ]);
        } else {
            toastr()->error("Danh mục không tồn tại!");
            return redirect()->back();
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
