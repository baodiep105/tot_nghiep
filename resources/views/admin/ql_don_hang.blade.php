@extends('master')
@section('title')
      <h1>Quản Lý đơn hàng</h1>
@endsection
@section('content')
    @include('page.don_hang')
{{-- <div class="modal fade" id="editModal_" tabindex="-1" aria-labelledby="doiTrangThai" aria-hidden="true">
    <div class="modal-dialog lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Chi Tiết Hóa Đơn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <table class="table">
                    <thead>
                      <tr >
                        <th scope="col">#</th>
                        <th scope="col">Sản Phẩm</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">tổng tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(value, key) in don_hang">
                        <th scope="row">@{{key+1}}</th>
                        <td>@{{value.username}}</td>
                        <td>O</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                </table>
            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-dismiss="modal" v-on:click="acceptUpdate()">Cập Nhật Danh Mục</button>
        </div>
    </div>
    </div>
</div> --}}
@endsection
@section('js')
{{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
<script src="/project/quan_ly_don_hang.js"></script>
@endsection
