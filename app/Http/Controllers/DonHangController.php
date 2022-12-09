<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ql_don_hang');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $donhang=DB::table('don_hangs')
                    ->join('users','don_hangs.id_user','users.id')
                    ->select('don_hangs.*','users.username')
                    ->get();

        return response()->json([
            'donhang'=>$donhang,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id){
        $donhang = DonHang::find($id);
        if($donhang) {
            // $san_pham->is_block = !$san_pham->is_open;
            if($donhang->status == 1) {
                $donhang->status = 0;
            } else {
                $donhang->status = 1;
            }
            $donhang->save();
            return response()->json(['status' => true]);
        }
    }

    public function delete($id)
    {
        $donHang = DonHang::find($id);

        if($donHang) {
            $donHang->delete();
            $chiTietDonHang=ChiTietDonHang::where('don_hang_id',$id)->delete();
            return response()->json(['status' => true]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        
        $chitietdonhang = DB::table('chi_tiet_don_hangs')
                                ->join('san_phams','chi_tiet_don_hangs.san_pham_id','san_phams.id')
                                ->where('don_hang_id',$id)
                                ->select('chi_tiet_don_hangs.*','san_phams.ten_san_pham')
                                ->get();
        $total=0;
        foreach($chitietdonhang as $ey => $value){
        $total+=$value->so_luong*$value->don_gia;
        }

       return view('admin.chi_tiet_hoa_don',compact('chitietdonhang','total'));

    }

    public function search(Request $request)
    {
        if($request->all()==null){
            $data=DB::table('don_hangs')
            ->join('users','don_hangs.id_user','users.id')
            ->select('don_hangs.*','users.username')
            ->get();
        }else
        {
            $data =DB::table('don_hangs')
            ->join('users','don_hangs.id_user','users.id')
            ->select('don_hangs.*','users.username')
            ->where('username', 'like', '%' . $request->search .'%')
            ->get();
        }
        return response()->json(['data' => $data]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonHang  $donHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonHang $donHang)
    {
        //
    }
}
