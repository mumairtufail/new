@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- [ Main Content ] start -->

    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Home</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Home</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1 overflow-hidden ">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/widget/img-status-4.svg') }}" alt="img"
                            class="img-fluid img-bg">
                        <h5 class="mb-4">Customers</h5>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">#</h3>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">Total Users listed on this website</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 60%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1 overflow-hidden ">
                    <div class="card-body">
                        <img src="{{asset('assets/images/widget/img-status-5.svg')}}" alt="img" class="img-fluid img-bg">
                        <h5 class="mb-4">Categories</h5>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">#</h3>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">Total Categories listed including sub categories</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card statistics-card-1 overflow-hidden  bg-brand-color-3">
                    <div class="card-body">
                        <img src="{{asset('assets/images/widget/img-status-6.svg')}}" alt="img" class="img-fluid img-bg">
                        <h5 class="mb-4 text-white">Products</h5>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="text-white f-w-300 d-flex align-items-center m-b-0"> # </h3>
                        </div>
                        <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Total products listed on Hakidd</p>
                        <div class="progress bg-white bg-opacity-10" style="height: 7px">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Products From United States</h5>
                    </div>
                    <div class="card-body">
                        <div id="world-map-markers" class="set-map" style="height:365px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h5>Users From United States</h5>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avtar avtar-s bg-light-primary flex-shrink-0">
                                <i class="ph-duotone ph-money f-20"></i>
                            </div>
                            <div class="media-body ms-3">
                                <p class="mb-0 text-muted">Total Earnings</p>
                                <h5 class="mb-0">$249.95</h5>
                            </div>
                        </div>
                        <div id="earnings-users-chart"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="media align-items-center">
                                    <div class="avtar avtar-s bg-light-warning flex-shrink-0">
                                        <i class="ph-duotone ph-lightning f-20"></i>
                                    </div>
                                    <div class="media-body ms-2">
                                        <p class="mb-0 text-muted">Total ideas</p>
                                        <h6 class="mb-0">235</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="media align-items-center">
                                    <div class="avtar avtar-s bg-light-danger flex-shrink-0">
                                        <i class="ph-duotone ph-map-pin f-20"></i>
                                    </div>
                                    <div class="media-body ms-2">
                                        <p class="mb-0 text-muted">Total location</p>
                                        <h6 class="mb-0">26</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>

    <!-- [ Main Content ] end -->
@endsection
