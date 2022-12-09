@extends('master')
@section('title')
      <h1>Quản Lý Đánh Giá</h1>
@endsection
@section('content')
@include('page.danh_gia')
@endsection
@section('js')
{{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
<script src="/project/quan_ly_danh_gia.js"></script>
@endsection
