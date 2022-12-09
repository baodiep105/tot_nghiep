
    new Vue({
        el: "#app",
        data: {
            list_mau:[],
            list_size: [],
            idDelete: 0,
            idDeleteMau:0,
            inputSearch: '',
            size:'',
            mau:'',
            hex:'',
        },

        created() {
            this.getData();
            this.loadData();
        },

        methods: {
            create(e) {
                e.preventDefault();
                var payload={
                    'size':this.size,
                };
                axios
                    .post('/admin/quan-ly-size/create', payload)
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
            createMau(e) {
                e.preventDefault();
                var payload={
                    'ten_mau':this.mau,
                    'ma_mau':this.hex,
                };
                axios
                    .post('/admin/quan-ly-mau/create', payload)
                    .then((res) => {
                        // console.log(res);
                        toastr.success('Thêm mới thành công!');
                        this.loadData();
                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value) {
                            toastr.error(value[0]);
                        });
                    });
            },
            loadData(){
                axios
                    .get('/admin/quan-ly-mau/getData')
                    .then((res) => {
                        this.list_mau = res.data.mau;
                    })
            },
            getData() {
                axios
                    .get('/admin/quan-ly-size/getData')
                    .then((res) => {
                        this.list_size = res.data.size;
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
                    .delete('/admin/quan-ly-size/delete/' + this.idDelete)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success('Đã xóa thành công');
                            this.getData();
                        } else {
                            toastr.error('mã size không tồn tại');
                        }
                    })
            },
            deleteMau(id) {
                this.idDeleteMau = id;
                console.log(id);
                console.log(this.idDeleteMau);
            },

            acceptDeleteMau() {
                axios
                    .delete('/admin/quan-ly-mau/delete/' + this.idDeleteMau)
                    .then((res) => {
                        if (res.data.status) {
                            toastr.success('Đã xóa  thành công');
                            this.loadData();
                        } else {
                            toastr.error('mã màu không tồn tại');
                        }
                    })
            },
        },
    });
