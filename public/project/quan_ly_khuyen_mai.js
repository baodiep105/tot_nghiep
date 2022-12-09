
        new Vue({
            el: "#app",
            data: {
                ds_san_pham: '',
                list_vue: [],
                idDelete: 0,
                inputSearch: '',
                add:{
                    id_san_pham:0,
                    ty_le:0,
                    is_open:1,
                },
                update:{
                    idEdit: 0,
                    id_san_pham_edit:0,
                    ty_le_edit:0,
                    is_open_edit:1,
                }
            },

            created() {
                this.getData();
            },

            methods: {
                create(e) {
                    e.preventDefault();
                    axios
                        .post('/admin/quan-ly-khuyen-mai/create', this.add)
                        .then((res) => {
                            // console.log(res);
                            toastr.success('Thêm mới thành công!');
                            this.getData();
                        })
                        .catch((res) => {
                            var danh_sach_loi = res.response.data.errors;
                            $.each(danh_sach_loi, function(key, value) {
                                toastr.error(value[0]);
                            });
                        });
                },
                getData() {
                    axios
                        .get('/admin/quan-ly-khuyen-mai/getData')
                        .then((res) => {
                            this.ds_san_pham = res.data.sanPham;
                            this.list_vue=res.data.ds_khuyen_mai;
                        })
                },

                doiTrangThai(id) {
                    axios
                        .get('/admin/quan-ly-khuyen-mai/changeStatus/' + id)
                        .then((res) => {
                            if (res.data.trangThai) {
                                toastr.success('Đã đổi trạng thái thành công!');
                                // Tình trạng mới là true
                                this.getData();
                            } else {
                                toastr.error('Vui lòng không can thiệp hệ thống!');
                            }
                        })
                },

                search() {
                    var payload = {
                        'search': this.inputSearch,
                    };
                    axios
                        .post('/admin/quan-ly-nhan-vien/search', payload)
                        .then((res) => {
                            this.list_vue = res.data.data;
                        });
                },

                deletekhuyenmai(id) {
                    this.idDelete = id;
                    console.log(id);
                    console.log(this.idDelete);
                },

                acceptDelete() {
                    axios
                        .delete('/admin/quan-ly-khuyen-mai/delete/' + this.idDelete)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success('Đã xóa khuyến mãi thành công');
                                this.getData();
                            } else {
                                toastr.error('mã khuyến mãi không tồn tại');
                            }
                        })
                },

                editDanhMuc(id) {
                    this.update.idEdit=id;
                    axios
                        .get('/admin/quan-ly-khuyen-mai/edit/' + id)
                        .then((res) => {
                            if (res.data.status) {
                                this.update.ty_le_edit=res.data.khuyen_mai.ty_le;
                                this.update.id_san_pham_edit=res.data.khuyen_mai.id_san_pham;
                                this.update.is_open_edit=res.data.khuyen_mai.is_open;
                                console.log(this.update);
                            } else {
                                toastr.error('Danh mục không tồn tại');
                            }
                        })
                },
                acceptUpdate() {
                    axios
                        .post('/admin/quan-ly-khuyen-mai/update', this.update)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success('Đã cập nhật khuyến mãi thành công');
                                this.getData();
                            } else {
                                toastr.error('Id khuyến mãi không tồn tại');
                            }
                        })
                        .catch((res) => {
                            var danh_sach_loi = res.response.data.errors;
                            $.each(danh_sach_loi, function(key, value) {
                                toastr.error(value[0]);
                            })
                        })
                },
            },
        });
    