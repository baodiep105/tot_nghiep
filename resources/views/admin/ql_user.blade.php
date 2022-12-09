@extends('master')
@section('title')
      <h1>Quản Lý Khách hàng</h1>
@endsection
@section('content')
    @include('page.user')
@endsection
@section('js')
{{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
<script src="/project/quan_ly_user.js"></script>
@endsection
