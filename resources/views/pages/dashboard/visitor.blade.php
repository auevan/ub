@extends('layouts.main2')

@push('js')
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
    
@endpush
@section('container')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
<div class="page-content">
<section class="row">
<div class="col-12">
    <div class="row">
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon purple mb-2">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Kunjungan</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon blue mb-2">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Pengunjung</h6>
                            <h6 class="font-extrabold mb-0">120.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon green mb-2">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Following</h6>
                            <h6 class="font-extrabold mb-0">80.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <div class="stats-icon red mb-2">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Saved Post</h6>
                            <h6 class="font-extrabold mb-0">112</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Statistik Tahun <?php $thn = explode('-', $now); echo $thn[0]; ?></h4>
                </div>
                <div class="card-body">
                    <div id="chart-profile-visit"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Berdasarkan Negara</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-primary" width="32" height="32" fill="blue"
                                    style="width:10px">
                                    <use
                                        xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">Europe</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">862</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-europe"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-success" width="32" height="32" fill="blue"
                                    style="width:10px">
                                    <use
                                        xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">America</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">375</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-america"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-danger" width="32" height="32" fill="blue"
                                    style="width:10px">
                                    <use
                                        xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">Indonesia</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">1025</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-indonesia"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="chart-visitors-profile" class="d-none"></div>
</section>
</div>
</div>
</div>

@endsection