
    new Vue({
        el              : "#app",
        data            : {
            list_vue                :   [],
            idDelete                :   0,
            inputSearch:'',
        },

        created(){
            this.getData();
        },

        methods         : {


            getData(){
                axios
                    .get('/admin/quan-ly-user/getData')
                    .then((res) => {
                        this.list_vue           = res.data.user;
                        this.danh_muc_cha_vue   = res.data.danh_muc_cha;
                    })
            },

            doiTrangThai(id) {
                var payload={
                    'id': id,
                }
                console.log(id);
                axios
                    .post('/admin/quan-ly-user/changeStatus', payload)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã đổi trạng thái thành công!');
                            // Tình trạng mới là true
                            this.getData();
                        } else {
                            toastr.error('Vui lòng không can thiệp hệ thống!');
                        }
                    })
            },

            search() {
                console.log(this.inputSearch);
                var payload = {
                    'search'    :   this.inputSearch,
                };
                console.log(payload);
                axios
                    .post('/admin/quan-ly-user/search', payload)
                    .then((res) => {
                        this.list_vue    = res.data.data;
                    });
            },

            deleteDanhMuc(id){
                this.idDelete = id;
            },

            acceptDelete(){
                console.log(this.idDelete);
                axios
                    .delete('/admin/quan-ly-user/delete/' + this.idDelete)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã xóa danh mục thành công');
                            this.getData();
                        } else {
                            toastr.error('Danh mục không tồn tại');
                        }
                    })
            },

            editDanhMuc(id){
                this.idEdit = id;
                axios
                    .get('/admin/danh-muc/edit/' + id)
                    .then((res) => {
                        console.log(res);
                        if(res.data.status) {
                            this.ten_danh_muc_edit      =   res.data.danhMuc.ten_danh_muc;
                            this.id_danh_muc_cha_edit   =   res.data.danhMuc.id_danh_muc_cha;
                            this.is_open_edit           =   res.data.danhMuc.is_open;
                        } else {
                            toastr.error('Danh mục không tồn tại');
                        }
                    })
            },

            acceptUpdate() {
                var payload = {
                    'id'                :   this.idEdit,
                    'ten_danh_muc'       :   this.ten_danh_muc_edit,
                    'id_danh_muc_cha'    :   this.id_danh_muc_cha_edit,
                    'is_open'            :   this.is_open_edit,
                };

                // console.log(payload);

                axios
                    .post('/admin/danh-muc/update', payload)
                    .then((res) => {
                        // console.log(res);
                        toastr.success('Cập thành công danh mục!');
                        this.getData();
                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
        },
    });
