new Vue({
    el: "#app",
    data: {

        list_vue: [],
        danh_muc_cha_vue: [],
        danh_muc_edit: {},
        idDelete: 0,
        danh_sach_danh_muc: [],
        inputSearch: '',
        add: {
            ten_danh_muc: '',
            hinh_anh: '',
            id_danh_muc_cha: '',
            is_open: 1,
        },
        idEdit: 0,
        ten_danh_muc_edit: '',
        hinh_anh_edit: '',
        id_danh_muc_cha_edit: '',
        is_open_edit: 1,
        anh:'',
    },

    created() {
        this.getData();
        // console.log(this.list_vue)
    },

    methods: {
        create(e) {
            e.preventDefault();
            this.add.hinh_anh = $("#hinh_anh").val();
            axios
                .post('/admin/danh-muc/create', this.add)
                .then((res) => {
                    toastr.success("Đã thêm ảnh mới!");
                    this.getData();
                })
                .catch((res) => {
                    var errors = res.response.data.errors;
                    $.each(errors, function(k, v) {
                        toastr.error(v[0]);
                    });
                });
            // var payload = {
            //     'ten_danh_muc': this.ten_danh_muc,
            //     'hinh_anh': this.hinh_anh,
            //     'id_danh_muc_cha': this.id_danh_muc_cha,
            //     'is_open': this.is_open,

            // };

            // axios
            //     .post('/admin/danh-muc/create', payload)
            //     .then((res) => {
            //         // console.log(res);
            //         toastr.success('Thêm mới thành công danh mục!');
            //         this.getData();
            //     })
            //     .catch((res) => {
            //         var danh_sach_loi = res.response.data.errors;
            //         $.each(danh_sach_loi, function(key, value) {
            //             toastr.error(value[0]);
            //         });
            //     });
        },

        getData() {
            axios
                .get('/admin/danh-muc/getData')
                .then((res) => {
                    this.list_vue = res.data.list;
                    this.danh_muc_cha_vue = res.data.danh_muc_cha;
                })
        },

        doiTrangThai(id) {
            axios
                .get('/admin/danh-muc/changeStatus/' + id)
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
                'search'    :   this.inputSearch,
            };
            console.log(this.inputSearch)
            axios
                .post('/admin/danh-muc/search', payload)
                .then((res) => {
                    this.list_vue    = res.data.search;
                    console.log(this.list_vue);
                });
        },


        deleteDanhMuc(id) {
            this.idDelete = id;
        },

        acceptDelete() {
            axios
                .delete('/admin/danh-muc/delete/' + this.idDelete)
                .then((res) => {
                    if (res.data.status) {
                        toastr.success('Đã xóa danh mục thành công');
                        this.getData();
                    } else {
                        toastr.error('Danh mục không tồn tại');
                    }
                })
        },

        editDanhMuc(id) {
            this.idEdit=id;
            axios
                .get('/admin/danh-muc/edit/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.hinh_anh_edit = res.data.danhMuc.hinh_anh;
                        this.ten_danh_muc_edit = res.data.danhMuc.ten_danh_muc;
                        this.id_danh_muc_cha_edit = res.data.danhMuc.id_danh_muc_cha;
                        this.is_open_edit = res.data.danhMuc.is_open;
                        console.log(this.hinh_anh_edit);
                    } else {
                        toastr.error('Danh mục không tồn tại');
                    }
                })


        },

        acceptUpdate() {
            this.anh=$("#hinh_anh_edit").val();
            var payload = {
                    'idEdit'    : this.idEdit,
                 'ten_danh_muc_edit': this.ten_danh_muc_edit,
                 'hinh_anh_edit': this.anh,
                 'id_danh_muc_cha_edit': this.id_danh_muc_cha_edit,
                 'is_open_edit': this.is_open_edit,

             };
            //  console.log(this.anh);
            axios
                .post('/admin/danh-muc/update', payload)
                .then((res) => {
                    // console.log(res);
                    toastr.success('Cập thành công danh mục!');
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
