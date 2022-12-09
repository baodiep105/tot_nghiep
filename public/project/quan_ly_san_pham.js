
    new Vue({
        el  :   '#app',
        data:   {
            danhSachSanPham         :[],
            danhSachDanhMuc         :[],
            id_delete               :0,
            inputSearch             :'',
            idEdit                 :0,
            id_danh_muc_edit        :0,
            ten_san_pham_edit       :'',
            brand_edit              :'',
            gia_ban_edit            :0,
            gia_khuyen_mai_edit     :'',
            mo_ta_ngan_edit         :'',
            mo_ta_chi_tiet_edit     :'',
            id_danh_muc_edit        :0,
            trang_thai_edit         :0,
        },
        created() {
            this.loadData();
        },
        methods :   {
            deleteSanPham(id){
                this.id_delete = id;
                console.log(this.id_delete);
            },
            loadData() {
                axios
                    .get('/admin/san-pham/getData')
                    .then((res) => {
                        this.danhSachSanPham = res.data.danhSachSanPham;
                        this.danhSachDanhMuc=res.data.danhSachDanhMuc;
                    });
            },
            search() {
                var payload = {
                    'search'    :   this.inputSearch,
                };
                axios
                    .post('/admin/san-pham/search', payload)
                    .then((res) => {
                        this.danhSachSanPham    = res.data.dataProduct;
                    });
            },
            acceptDelete(){
                axios
                    .get('/admin/san-pham/delete/' + this.id_delete)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã xóa sản thành công');
                            this.loadData();
                        } else {
                            toastr.error('sản phẩm tồn tại');
                        }
                    })
            },

            editSanPham(id){
                axios
                    .get('/admin/san-pham/edit/' + id)
                    .then((res) => {
                        if(res.data.status) {
                            this.idEdit             =res.data.san_pham.id;
                            this.ten_san_pham_edit   =   res.data.san_pham.ten_san_pham;
                            this.brand_edit           =   res.data.san_pham.brand;
                            this.gia_ban_edit           =   res.data.san_pham.gia_ban;
                            this.gia_khuyen_mai_edit       =res.data.san_pham.gia_khuyen_mai;
                            this.mo_ta_ngan_edit       =res.data.san_pham.mo_ta_ngan;
                            this.mo_ta_chi_tiet_edit       =res.data.san_pham.mo_ta_chi_tiet;
                            this.id_danh_muc_edit       =res.data.san_pham.id_danh_muc;
                            this.trang_thai_edit       =Number(res.data.san_pham.is_open);
                        } else {
                            toastr.error('Danh mục không tồn tại');
                        }
                    })
            },

            acceptUpdate() {
                var payload = {
                    'id'                :   this.idEdit,
                    'ten_san_pham'      :   this.ten_san_pham_edit,
                    'brand'             :   this.brand_edit,
                    'gia_ban'           :   this.gia_ban_edit,
                    'gia_khuyen_mai'    :   this.gia_khuyen_mai_edit,
                    'mo_ta_ngan'        :   this.mo_ta_ngan_edit,
                    'mo_ta_chi_tiet'    :   this.mo_ta_chi_tiet_edit,
                    'id_danh_muc'       :   this.id_danh_muc_edit,
                    'trang_thai'        :   this.trang_thai_edit,
                };

                console.log(payload);

                axios
                    .post('/admin/san-pham/update', payload)
                    .then((res) => {
                        console.log(res);
                        this.loadData();
                        toastr.success('Cập thành công danh mục!');

                    })
                    .catch((res) => {
                        var danh_sach_loi = res.response.data.errors;
                        $.each(danh_sach_loi, function(key, value){
                            toastr.error(value[0]);
                        });
                    });
            },
            changeStatus(id) {
                axios
                    .get('/admin/san-pham/changeStatus/' + id)
                    .then((res) => {
                        if(res.data.status) {
                            this.loadData();
                            toastr.success('thay đổi trạng thái thành công');
                        }
                    });
            },
        },
    });
