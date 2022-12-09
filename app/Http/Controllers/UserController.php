<?php

namespace App\Http\Controllers;

use App\Http\Requests\donhangRequest;
use App\Http\Requests\profileRequest;
use App\Http\Requests\registerRequest;
use App\Mail\MailKichHoat;
use App\Mail\SendMail;
use App\Models\ChiTietDonHang;
use App\Models\DanhGia;
use App\Models\DonHang;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function register(Request $request)
    {
        $rules = [
            'username'  => 'required|unique:users,username',
            'email'     => 'required|unique:users,email',
            'password'  => 'required|min:6',
            're_password' => 'required|same:password'
        ];

        $input     = $request->all();

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'error' => $validator->errors()]);
        }
        $username = $request->username;
        $email    = $request->email;
        $password = $request->password;
        $hash     =Str::uuid();
        $user     = User::create(['username' => $username, 'email' => $email, 'password' => bcrypt($password), 'id_loai' => 2,'hash'=>$hash,'is_email'=>0]);

        Mail::to($request->email)->send(new SendMail(
            $request->username,
            $hash,
            'Kích Hoạt Tài Khoảng Người Dùng',
        ));
        if ($user) {
            return response()->json([
                'status' => 'success',
            ]);
        }
    }

    public function active($hash)
    {
        $user = User::where('hash', $hash)->first();
        if($user->is_email) {
            return "<h1>Tài khoản của bạn đã được kích hoạt trước đó</h1>";
        } else {
            $user->is_email = 1;
            $user->save();
            return "<h1>Tài khoản của bạn đã được kích hoạt!</h1>";
        }
    }
    public function login(Request $request)
    {
        if (!Auth('web')->attempt($request->only('username', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('username', $request['username'])->firstOrFail();
        if($user->is_email==1){
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => 'success',
                'user' => $user,
                'access_token' => $token,
            ]);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'bạn cần phải kích hoạt mail để login  ',
            ]);
        }
        return response()->json([
            'status' =>'error',
        ]);


    }


    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->tokens()->delete();
            return response()->json([

                'status'    => 'success',
                'message'   => 'User Logout',
            ], 200);
        } else {
            return response()->json([
                'status'    => 'erorr',
                'message'   => 'logout fail',
            ]);
        }
    }


    public function getme()
    {
        return response()->json([
            'user' => auth()->user(),
        ]);
    }

    public function danhgiaUser($id, Request $request)
    {
        $rules = [
            'content'  => 'required|min:3',
            'sao' => 'required|numeric',
        ];

        $input     = $request->all();

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->errors()]);
        }
        $danh_gia = DanhGia::create([
            'content'   => $request->content,
            'rate'       => $request->sao,
            'email' => auth()->user()->email,
            'id_san_pham' => $id,
        ]);
        return response()->json([
            'status'=>'success',
            'data'=>$danh_gia,
        ]);
    }

    // public function forget_password(Request $request){
    //     $rules = [
    //         'email'     => 'required|exists:users,email',
    //     ];
    //     $a=Str::random(4);
    //     $input     = $request->all();

    //     $validator = Validator::make($input, $rules);

    //     if ($validator->fails()) {
    //         return response()->json(['status' => 'error', 'error' => $validator->errors()]);
    //     }
    //     $email=$request->email;
    //     $user=User::where('email',$email)->first();

    //     if($user){
    //         $hash=$user->hash;
    //         $username=$user->username;
    //         Mail::to($request->email)->send(new SendMail(
    //             $username,
    //             $hash,
    //             'Đổi mật Khẩu Tài Khoảng Người Dùng',
    //         ));
    //     }


    //     if ($user) {
    //         return response()->json([
    //             'status' => 'success',
    //         ]);
    //     }

    // }

    public function UpdateProfile(profileRequest $request){

        $id=auth()->user()->id;
        $user=User::find($id);

        $user->update([
            'fullname'    =>$request->ho_ten,
            'sdt'   =>$request->sdt,
            'dia_chi'   =>$request->dia_chi,
        ]);

        return response()->json([
            'status'=>'success',
            'data'=>$user,
        ]);
    }

    public function DonHang(Request $request)
    {
        $validator = Validator::make([
            $request->all()
        ], [
            'nguoi_nhan'      =>   'required',
            'sdt'           =>  'required|min:10|max:10',
            'dia_chi'                =>  'required',
        ],[
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
        ],[
            'nguoi_nhan'     =>  'người nhận',
            'sdt'   =>  'số điện thoại',
            'dia_chi'   =>  'địa chỉ',
        ]);
        $donHang=DonHang::create([
            'email'=>auth()->user()->email,
            'tong_tien'=>$request->tong_tien,
            'tien_giam_gia'=>$request->tien_giam,
            'thuc_tra'=>$request->thuc_tra,
            'trang_thai'=>0,
            'dia_chi'=>$request->dia_chi,
            'nguoi_nhan'=>$request->nguoi_nhan,
            'sdt'=>$request->sdt,
            'ghi_chu'=>$request->ghi_chu,
        ]);
        $chiTietDonHang=ChiTietDonHang::create([
            'id_chi_tiet_san_pham'=>$request->don_hang->id_chi_tiet_san_pham,
            'don_gia'=>$request->don_hang->don_gia,
            'so_luong'=>$request->so_luong,
            'id_don_hang'=>$donHang->id,
        ]);
        if($chiTietDonHang && $donHang ){
            return response()->json([
                'status'=>'success',
                'email'=>$request->email,
            ]);
        }
    }
}
