<?php

namespace App\Http\Controllers;

use App\Http\Requests\donhangRequest;
use App\Models\ChiTietDonHang;
use App\Models\ChiTietSanPhamModel;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;
use Carbon\Carbon;
use stdClass;

class add_cartController extends Controller
{
    // public function payment($type){
    //     // dd($type);
    //     if($type=='vnpay'){
    //          $this->vnpay();
    //     }
    // }
    public function ReturnURL(){
        // dd(123);
        return response()->json(
            [
                'dasdas'=>$cookie(),
            ]
        );
        $don_hang = DonHang::create([
                'email' => $donHang->email,
                'tong_tien' => $donHang->tong_tien,
                'tien_giam_gia' => $donHang->tien_giam,
                'thuc_tra' => $donHang->thuc_tra,
                'status' => 2,
                'dia_chi' => $donHang->dia_chi,
                'nguoi_nhan' => $donHang->nguoi_nhan,
                'sdt' => $donHang->sdt,
                'ghi_chu' => $donHang->ghi_chu,
                'loai_thanh_toan'=>"vnpay",
            ]);
            // dd($request->don_hang[0]);
            foreach ($donHang->don_hang as $value) {
                $chiTietDonHang = ChiTietDonHang::create([
                    'id_chi_tiet_san_pham' => $value['id_chi_tiet_san_pham'],
                    'don_gia' => $value['don_gia'],
                    'so_luong' => $value['so_luong'],
                    'don_hang_id' => $donHang->id,
                ]);
                $chi_tiet_san_pham = ChiTietSanPhamModel::where('id', $value['id_chi_tiet_san_pham'])->first();
                $chi_tiet_san_pham->sl_chi_tiet -= $value['so_luong'];
                $chi_tiet_san_pham->save();
            }
            return response()->json([
                'status' => 'success',
                'email' => $donHang->email,
            ]);
    }

    public function vnpay($amount){
    // dd($data['thuc_tra']);
        // $a=$data->thuc_tra;
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/api/vnpay/return";
        $vnp_TmnCode = "TKIKN7N0";//Mã website tại VNPAY
        $vnp_HashSecret = "JRCQGHNEQULNVFQJWJQSICRRIFAEBSKK"; //Chuỗi bí mật
        $vnp_TxnRef = Carbon::now()->toDateTimeString(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $amount*1000 *100;
        $vnp_Locale ='vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing
        // $vnp_Bill_Mobile = $data['sdt'];
        // $vnp_Bill_Email = $data['email'];
        // $fullName = trim($_POST['txt_billing_fullname']);
        // if (isset($fullName) && trim($fullName) != '') {
        //     $name = explode(' ', $fullName);
        //     $vnp_Bill_FirstName = array_shift($name);
        //     $vnp_Bill_LastName = array_pop($name);
        // }
        // $vnp_Bill_Address=$_POST['txt_inv_addr1'];
        // $vnp_Bill_City=$_POST['txt_bill_city'];
        // $vnp_Bill_Country=$_POST['txt_bill_country'];
        // $vnp_Bill_State=$_POST['txt_bill_state'];
        // // Invoice
        // $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
        // $vnp_Inv_Email=$_POST['txt_inv_email'];
        // $vnp_Inv_Customer=$_POST['txt_inv_customer'];
        // $vnp_Inv_Address=$_POST['txt_inv_addr1'];
        // $vnp_Inv_Company=$_POST['txt_inv_company'];
        // $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
        // $vnp_Inv_Type=$_POST['cbo_inv_type'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // // "vnp_ExpireDate"=>$vnp_ExpireDate,
            // "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
            // "vnp_Bill_Email"=>$vnp_Bill_Email,
            // "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
            // "vnp_Bill_LastName"=>$vnp_Bill_LastName,
            // "vnp_Bill_Address"=>$vnp_Bill_Address,
            // "vnp_Bill_City"=>$vnp_Bill_City,
            // "vnp_Bill_Country"=>$vnp_Bill_Country,
            // "vnp_Inv_Phone"=>$vnp_Inv_Phone,
            // "vnp_Inv_Email"=>$vnp_Inv_Email,
            // "vnp_Inv_Customer"=>$vnp_Inv_Customer,
            // "vnp_Inv_Address"=>$vnp_Inv_Address,
            // "vnp_Inv_Company"=>$vnp_Inv_Company,
            // "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
            // "vnp_Inv_Type"=>$vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return response()->json(['link'=>$vnp_Url]);
        // $returnData = array('code' => '00'
        //     , 'message' => 'success'
        //     , 'data' => $inputData);
        //     if ($id==1) {

                // header('Location: ' . $vnp_Url);
                // die();
            // } else {
            //     return ($returnData);
            // }
    }
    public function DonHang(donhangRequest $request, $type)
     {

        if (count($request->don_hang) > 0) {
            foreach ($request->don_hang as $value) {
                $san_pham = ChiTietSanPhamModel::find($value['id_chi_tiet_san_pham']);
                if ($value['so_luong'] > $san_pham->sl_chi_tiet) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Số lượng trong kho không đủ',
                    ]);
                }
            }
            $donHang=$request->all();
            // // session_start();
            // $cookie_name='don_hang';
            setcookie('data', json_encode($donHang), time() + (86400 * 30), "/");
            return response()->json(
                [
                    'dasdas'=>json_decode($_COOKIE['data']),
                ]
            );
            // $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            // $vnp_Returnurl = "http://127.0.0.1:8000/api/test";
            // $vnp_TmnCode = "TKIKN7N0";//Mã website tại VNPAY
            // $vnp_HashSecret = "JRCQGHNEQULNVFQJWJQSICRRIFAEBSKK"; //Chuỗi bí mật
            // $vnp_TxnRef = Carbon::now()->toDateTimeString(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            // $vnp_OrderInfo = 'thanh toán đơn hàng';
            // $vnp_OrderType = 'billpayment';
            // $vnp_Amount = $request->thuc_tra*1000 *100;
            // $vnp_Locale ='vn';
            // $vnp_BankCode = 'NCB';
            // $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            // $inputData = array(
            //     "vnp_Version" => "2.1.0",
            //     "vnp_TmnCode" => $vnp_TmnCode,
            //     "vnp_Amount" => $vnp_Amount,
            //     "vnp_Command" => "pay",
            //     "vnp_CreateDate" => date('YmdHis'),
            //     "vnp_CurrCode" => "VND",
            //     "vnp_IpAddr" => $vnp_IpAddr,
            //     "vnp_Locale" => $vnp_Locale,
            //     "vnp_OrderInfo" => $vnp_OrderInfo,
            //     "vnp_OrderType" => $vnp_OrderType,
            //     "vnp_ReturnUrl" => $vnp_Returnurl,
            //     "vnp_TxnRef" => $vnp_TxnRef,
            // );
            // if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            //     $inputData['vnp_BankCode'] = $vnp_BankCode;
            // }
            // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            // }

            // //var_dump($inputData);
            // ksort($inputData);
            // $query = "";
            // $i = 0;
            // $hashdata = "";
            // foreach ($inputData as $key => $value) {
            //     if ($i == 1) {
            //         $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            //     } else {
            //         $hashdata .= urlencode($key) . "=" . urlencode($value);
            //         $i = 1;
            //     }
            //     $query .= urlencode($key) . "=" . urlencode($value) . '&';
            // }

            // $vnp_Url = $vnp_Url . "?" . $query;
            // if (isset($vnp_HashSecret)) {
            //     $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            //     $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            // }

            // // $returnData = array('code' => '00'
            // //     , 'message' => 'success'
            // //     , 'data' => $inputData);
            // //     if ($id==1) {

            //         // header('Location: ' . $vnp_Url);
            //     return response()->json(['link'=>$vnp_Url]);
            //             // die();
            //     // } else {
            //     //     return ($returnData);
            //     // }
            // dd($type);
            if($type=='vnpay'){

                   return $this->vnpay($request->thuc_tra);
                }else if($type=='momo'){
                    $this->vnpay();
                }else{
                     $donHang = DonHang::create([
                    'email' => $request->email,
                    'tong_tien' => $request->tong_tien,
                    'tien_giam_gia' => $request->tien_giam,
                    'thuc_tra' => $request->thuc_tra,
                    'status' => 2,
                    'dia_chi' => $request->dia_chi,
                    'nguoi_nhan' => $request->nguoi_nhan,
                    'sdt' => $request->sdt,
                    'ghi_chu' => $request->ghi_chu,
                    'loai_thanh_toan'=>"âsdasdad",
                     ]);
            // dd($request->don_hang[0]);
                foreach ($request->don_hang as $value) {
                    $chiTietDonHang = ChiTietDonHang::create([
                        'id_chi_tiet_san_pham' => $value['id_chi_tiet_san_pham'],
                        'don_gia' => $value['don_gia'],
                        'so_luong' => $value['so_luong'],
                        'don_hang_id' => $donHang->id,
                    ]);
                $chi_tiet_san_pham = ChiTietSanPhamModel::where('id', $value['id_chi_tiet_san_pham'])->first();
                $chi_tiet_san_pham->sl_chi_tiet -= $value['so_luong'];
                $chi_tiet_san_pham->save();
                }
            // }
            return response()->json([
                'status' => 'success',
                'email' => $donHang->email,
            ]);
        }
        // else{
        //     return response()->json([
        //             'status' => 'error',
        //             'message'=> 'hãy chọn sản phẩm cần mua',
        //         ]);
        // }
    }

    }
    public function LichSuDonHang(Request $request)
    {
        // dd($request->email);
        if ($request->email != null) {
            $donhang = DB::table('don_hangs')
                ->where('email', $request->email)
                ->orderBy('created_at', 'DESC')
                ->get();
            return response()->json([
                'status' => 'success',
                'donhang' => $donhang,
            ]);
        }
        return response()->json([
            'status' => 'erorr',
        ]);
    }

    public function detail($id)
    {
        $san_pham=array();
        $chitietdonhang = DB::table('chi_tiet_san_pham')
            ->join('chi_tiet_don_hangs', 'chi_tiet_san_pham.id', 'chi_tiet_don_hangs.id_chi_tiet_san_pham')
            ->join('san_phams', 'chi_tiet_san_pham.id_sanpham', 'san_phams.id')
            ->join('mau_sac', 'chi_tiet_san_pham.id_mau', 'mau_sac.id')
            ->join('size', 'chi_tiet_san_pham.id_size', 'size.id')
            ->join('don_hangs', 'chi_tiet_don_hangs.don_hang_id', 'don_hangs.id')
            ->where('don_hang_id', $id)
            ->select('chi_tiet_don_hangs.*','mau_sac.hex', 'chi_tiet_san_pham.*', 'san_phams.ten_san_pham', 'mau_sac.ten_mau', 'size.size',)
            ->get();
        $total = 0;
        // $chitietdonhang->total=0;
        // dd($chitietdonhang->donhang);
        foreach ($chitietdonhang as $ey => $value) {
            $sanpham=new stdClass;
            $sanpham=$value;
            $sanpham->total=$value->don_gia*$value->so_luong;
            $total += $value->so_luong * $value->don_gia;
            array_push($san_pham,$sanpham);
        }
        $hinh_anh = DB::table('hinh_anh')->get();
        $id = array();
        foreach ($chitietdonhang as $value) {
            array_push($id, $value->id);
        }
        $anh = array();
        foreach ($id as $key)
            foreach ($hinh_anh as $value) {
                if ($key == $value->id_san_pham) {
                    array_push($anh, $value);
                    break;
                }
            }

        foreach ($chitietdonhang as $value) {
            foreach ($anh as $key) {
                if ($value->id == $key->id_san_pham) {
                    $value->hinh_anh = $key->hinh_anh;
                    break;
                }
            }
        }
        return response()->json([
            'status' => 'success',
            'data' => $san_pham,
            'total'=> $total,
        ]);
    }
}
