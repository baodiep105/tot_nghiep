@extends('master')
@section('title')
    <H1><b>Quản Lý Nhân Viên</b></H1>
@endsection
@section('content')
    @include('page.nhan_vien')
@endsection

@section('js')
    {{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
    <script src="/project/quan_ly_nhan_vien.js"></script>
@endsection
