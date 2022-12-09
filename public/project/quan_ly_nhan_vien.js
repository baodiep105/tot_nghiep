
        new Vue({
            el: "#app",
            data: {
                username: '',
                password: '',
                re_password:'' ,
                username_edit:'',
                password_edit:'',
                re_password_edit:'',
                list_vue: [],
                idDelete: 0,
                idEdit: 0,
                inputSearch: '',
            },

            created() {
                this.getData();
            },

            methods: {
                create(e) {
                    e.preventDefault();
                    var payload = {
                        'username': this.username,
                        'password': this.password,
                        're_password': this.re_password,
                    };
                    console.log(payload)
                    axios
                        .post('/admin/quan-ly-nhan-vien/create', payload)
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
                        .get('/admin/quan-ly-nhan-vien/getData')
                        .then((res) => {
                            this.list_vue = res.data.user;
                        })
                },

                // doiTrangThai(id) {
                //     axios
                //         .get('/admin/danh-muc/changeStatus/' + id)
                //         .then((res) => {
                //             if (res.data.trangThai) {
                //                 toastr.success('Đã đổi trạng thái thành công!');
                //                 // Tình trạng mới là true
                //                 this.getData();
                //             } else {
                //                 toastr.error('Vui lòng không can thiệp hệ thống!');
                //             }
                //         })
                // },

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

                deleteDanhMuc(id) {
                    this.idDelete = id;
                },

                acceptDelete() {
                    axios
                        .delete('/admin/quan-ly-nhan-vien/delete/' + this.idDelete)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success('Đã xóa nhân viên thành công');
                                this.getData();
                            } else {
                                toastr.error('nhân viên không tồn tại');
                            }
                        })
                },

                editDanhMuc(id) {
                    this.idEdit = id;
                },

                acceptUpdate() {
                    var payload = {
                        'id': this.idEdit,
                        'password': this.password_edit,
                        're_password': this.password_edit,
                    };

                    // console.log(payload);

                    axios
                        .post('/admin/quan-ly-nhan-vien/update', payload)
                        .then((res) => {
                            // console.log(res);
                            toastr.success('Cập nhật thành công!');
                            this.getData();
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
    