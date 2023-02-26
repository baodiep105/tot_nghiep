    // new Vue({
    //     el  :   '#app',
    //     data:   {
    //         doanh_thu:'',
    //         san_pham_ban_chay:[],
    //         khuyenmai:'',
    //         khach_hang_mua_nhieu:[],

    //     },
    //     created() {
    //         this.loadData();
    //     },
    //     methods :   {
    //         loadData() {
    //             axios
    //                 .get('/admin/thong-ke/all')
    //                 .then((res) => {
    //                     this.doanh_thu = res.data.doanh_thu;
    //                     this.san_pham_ban_chay = res.data.san_pham_ban_chay;
    //                     this.khuyenmai = res.data.sl_san_pham_khuyen_mai;
    //                     this.khach_hang_mua_nhieu = res.data.khach_hang_mua_nhieu;
    //                     console.log(this.doanh_thu);
    //                 });
    //         },
    //         create() {
    //             axios
    //                 .post('/admin/san-pham/create', this.sanPhamCreate)
    //                 .then((res) => {
    //                     toastr.success("Đã thêm mới sản phẩm thành công!!!");
    //                     this.loadData();
    //                 })
    //                 .catch((res) => {
    //                     var danh_sach_loi = res.response.data.errors;
    //                     $.each(danh_sach_loi, function(key, value){
    //                         toastr.error(value[0]);
    //                     });
    //                 });
    //         },
    //     },
    // });
