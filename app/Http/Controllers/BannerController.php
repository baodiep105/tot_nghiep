<?php

namespace App\Http\Controllers;

use App\Http\Requests\bannerrequest;
use App\Http\Requests\editBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('admin.ql_banner');
    }


    public function create(bannerrequest $request)
    {
        $data = DB::table('banners')->update(['is_open' => 0]);
        $banner = Banner::create([
            'banner_1' => $request->hinh_anh_1,
            'banner_2' => $request->hinh_anh_2,
            'banner_3' => $request->hinh_anh_3,
            'banner_4' => $request->hinh_anh_4,
            'banner_5' => $request->hinh_anh_5,
            'is_open' => 1,
        ]);
        return response()->json([
            'trangThai' =>  true,
            'banner' => $banner,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $banner = Banner::orderby('created_at', 'DESC')->get();
        return response()->json([
            'status' => 'success',
            'banner' => $banner,
        ]);
    }

    public function doiTrangThai($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->is_open = !$banner->is_open;
            $banner->save();
            return response()->json([
                'trangThai'         =>  true,
                'tinhTrangDanhMuc'  =>  $banner->is_open,
            ]);
        } else {
            return response()->json([
                'trangThai'         =>  false,
            ]);
        }
    }

    public function delete($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->delete();
            return response()->json([
                'status'  =>  true,

            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner = Banner::where('id', $id)->first();
            return response()->json([
                'status'  =>  true,
                'banner'    =>  $banner,
            ]);
        } else {
            toastr()->error("Ảnh không tồn tại!");
            return redirect()->back();
        }
    }

    public function update(editBannerRequest $request)
    {
        // $data     = $request->all();
        $banner = Banner::find($request->idEdit);
        if ($banner) {
            $banner->update([
                'banner_1'      =>  $request->hinh_anh_1_edit,
                'banner_2'         => $request->hinh_anh_2_edit,
                'banner_3'         => $request->hinh_anh_3_edit,
                'banner_4'         => $request->hinh_anh_4_edit,
                'banner_5'         => $request->hinh_anh_5_edit,
            ]);
            return response()->json([
                'status' => true,
                'data'  => $request->all(),
            ]);
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }
}
