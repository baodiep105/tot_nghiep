@extends('master')
@section('title')
    <H1><b>Chi tiết Sản Phẩm</b></H1>
@endsection
@section('content')
    @include('page.chi_tiet_san_pham')
@endsection

@section('js')
{{-- <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script> --}}
<script src="/project/chi_tiet_san_pham.js">

</script>
@endsection
