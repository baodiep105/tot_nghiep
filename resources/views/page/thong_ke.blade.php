<div id="app">
    <div class="wrapper">
        <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div id="app">
                    <div class="owl-stage">
                        {{-- <div class="owl-item col-8">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <label style="font-size: 30px"></label>
                                    <h3>{{$doanhThu}}$</h3>
                                    <h3>{{$khuyenMai}}</h3>
                                    <p>Doanh thu</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div> --}}
                        <div class="owl-item col-8">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $doanhThu }}$</h3>
                                    <p>Doanh Thu</p>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="owl-item col-8">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $khuyenMai }}/{{ $all }}</h3>
                                    <p>Sản phẩm dang khuyến mãi</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="owl-item col-8">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $tyLe }}%</h3>
                                    <p>Sản Phẩm Bán chạy nhất:<b> {{ $sanPham[0]->ten_san_pham }}</b></p>
                                    {{-- <p>{{$sanPham[0]->ten_san_pham}}</p> --}}
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="owl-item col-8">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $tyLeKhachHang }}%</h3>
                                    <p>khách hàng vàng:<b> {{ $khachHang[0]->email }}</b></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"><h3> Biểu Đồ</h3></div>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-success " style="height: 616px;  ">
                <div class="card-header">
                    <h3 class="card-title">Doanh thu</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <canvas ref="myDiv" id="myChart" style="height: 600px; "></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="card card-success" style="height: 300px; width: 100%">
                    <div class="card-header">
                        <h3 class="card-title">Sản phẩm bán chạy</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas ref="myDiv" id="doughnutSanPham"></canvas>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card card-success" style="height: 300px;width: 100%"">
                    <div class="card-header">
                        <h3 class="card-title">Khách hàng vàng</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas ref="myDiv" id="doughnutCustomer"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
