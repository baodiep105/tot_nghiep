<div id="app">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <h4 class="card-title">Danh sách đánh giá</h4>
                        </div>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="row mt-2 ml-2 mb-2">
                        <div class="col-md-4">
                            <div class="input-group ">
                                <input type="text" v-model="inputSearch" class="form-control" placeholder="search"
                                    aria-label="Nhập danh mục cần tìm" aria-describedby="button-addon2">
                                <button v-on:click="search()"class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">search</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Nội dung</th>
                                    <th>sao</th>
                                    <th>Ngày Đăng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in list_vue">
                                    <th class="text-center align-middle">@{{ key + 1 }}</th>
                                    <td class="text-center align-middle">@{{ value.email }}</td>
                                    <td class="text-center align-middle">@{{ value.content }}</td>
                                    <td class="text-center align-middle">@{{ value.rate }}</td>
                                    <td class="text-center align-middle"> @{{ value.created_at }}</td>
                                    <td class="text-center">
                                        <a href=""data-toggle="modal" data-target="#deleteModal"
                                            v-on:click="deleteDanhMuc(value.id)"><i class="far fa-trash-alt"></i></a>
                                        {{-- <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" v-on:click="deleteDanhMuc(value.id)">Delete</button> --}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xóa User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" v-model="idDelete" placeholder="Nhập vào id cần xóa"
                        hidden>
                    Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" v-on:click="acceptDelete()"
                        data-dismiss="modal">Xóa</button>
                </div>
            </div>
        </div>
    </div>
</div>
