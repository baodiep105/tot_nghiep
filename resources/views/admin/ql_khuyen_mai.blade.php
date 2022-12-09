@extends('master')
@section('title')
    <H1><b>Quản Lý Khuyến mãi</b></H1>
@endsection
@section('content')
   @include('page.khuyen_mai')
@endsection

@section('js')
    {{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
    <script src="/project/quan_ly_khuyen_mai.js"></script>
@endsection
