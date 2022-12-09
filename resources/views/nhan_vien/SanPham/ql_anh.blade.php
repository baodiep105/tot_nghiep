@extends('nhan_vien.master')
@section('title')
    <h1>Quản lý ảnh</h1>
@endsection
@section('content')
  @include('page.ql_anh')
@endsection
@section('js')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('.lfm').filemanager('image');
    </script>
    <script>
        new Vue({
            el: '#app',
            data: {
                danhSachSanPham: [],
                danhSachDanhMuc: [],
                id_delete:0,
                inputSearch: '',
                idEdit: 0,
                ds_anh: [],
                anh:'',
                hinh_anh_edit:'',
                id_san_pham_edit:0,
                add: {
                    hinh_anh: '',
                    id_san_pham: 0,
                }
            },
            created() {
                this.loadData();
            },
            methods: {
                create(e) {
                    e.preventDefault();
                    this.add.hinh_anh = $("#hinh_anh").val();
                    axios
                        .post('/admin/quan-ly-anh/create', this.add)
                        .then((res) => {
                            toastr.success("Đã thêm ảnh mới!");
                            this.loadData();
                        })
                        .catch((res) => {
                            var errors = res.response.data.errors;
                            $.each(errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                deleteAnh(id) {
                    this.id_delete = id;
                    console.log(this.id_delete);
                },
                acceptDelete() {
                    axios
                        .delete('/admin/quan-ly-anh/delete/' + this.id_delete)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success('Đã xóa danh mục thành công');
                                this.getData();
                            } else {
                                toastr.error('Danh mục không tồn tại');
                            }
                        })
                },
                loadData() {
                    axios
                        .get('/admin/quan-ly-anh/getData')
                        .then((res) => {
                            this.danhSachSanPham = res.data.data;
                            this.ds_anh = res.data.sanPham;
                        });
                },

                search() {
                    var payload = {
                        'search': this.inputSearch,
                    };
                    axios
                        .post('/admin/san-pham/search', payload)
                        .then((res) => {
                            this.danhSachSanPham = res.data.dataProduct;
                        });
                },

                editDanhMuc(id) {
                    this.idEdit=id;
                    axios
                        .get('/admin/quan-ly-anh/edit/' + id)
                        .then((res) => {
                            if (res.data.status) {
                                this.hinh_anh_edit = res.data.anh.hinh_anh;
                                this.id_san_pham_edit = res.data.anh.id_san_pham;
                                console.log(this.id_san_pham_edit);
                            } else {
                                toastr.error('Danh mục không tồn tại');
                            }
                        })
                },

                acceptUpdate() {
                    this.anh=$("#hinh_anh_edit").val();
                    var payload = {
                        'id': this.idEdit,
                        'id_san_pham': this.id_san_pham_edit,
                        'hinh_anh':this.anh,
                    };
                    axios
                        .post('/admin/quan-ly-anh/update', payload)
                        .then((res) => {
                            console.log(res);
                            this.loadData();
                            toastr.success('Cập nhật thành công ảnh!');

                        })
                        .catch((res) => {
                            var danh_sach_loi = res.response.data.errors;
                            $.each(danh_sach_loi, function(key, value) {
                                toastr.error(value[0]);
                            });
                        });
                },
            },
        });
    </script>
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('.lfm').filemanager('image', {
            prefix: '/laravel-filemanager'
        });
        $('.edit_lfm').filemanager('image', {
            prefix: '/laravel-filemanager'
        });
    </script>
@endsection
