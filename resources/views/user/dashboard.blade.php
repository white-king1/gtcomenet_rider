@extends('layouts.dashboard_layout')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="promotion d-flex justify-content-between align-items-center">
                        <div class="promotion-detail">
                            <h3 class="text-white mb-3">Welcome, {{ Auth::user()->name }} <br> to Gtcomnet Rider Dashboard
                            </h3>
                            <p>Book your Dispatch Rides at an Afordable Rate</p><a class="btn btn-primary me-3">Explore</a><a
                                class="btn btn-secondary">Create</a>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-6 col-xl-8 col-lg-6">
                    <div id="user-activity" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Bookings</h4>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div><canvas height="280" width="670" id="activity"
                                style="display: block; width: 670px; height: 280px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-3 col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Statistics</h4>
                        </div>
                        <div class="card-body bs-0">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div><canvas height="280" width="295" id="most-selling-items"
                                class="chartjs-render-monitor"
                                style="display: block; width: 295px; height: 280px;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Top Riders</h4><a href="#">See more</a>
                        </div>
                        <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/1.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Terry Camacho</h5>
                                                <p class="mb-2">160 Delivered Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/2.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Hillary Cambell</h5>
                                                <p class="mb-2">140 Delivered Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-secondary">Following</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/3.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">James Hardy</h5>
                                                <p class="mb-2">60 Delivered Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/4.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">GoodMan Gold</h5>
                                                <p class="mb-2">260 Delivered Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/5.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Toks Teken</h5>
                                                <p class="mb-2">60 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img
                                                    src="assets_dashboard/images/avatar/5.jpg" alt=""
                                                    width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Dave Grant</h5>
                                                <p class="mb-2">300 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">Recent Bid </h4>
                        </div>
                        <div class="card-body bs-0 bg-transparent p-0">
                            <div class="bid-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </th>
                                                <th>Item List</th>
                                                <th>Open Price</th>
                                                <th>Your Offer</th>
                                                <th>Recent Offer</th>
                                                <th>Time Left</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="assets_dashboard/images/items/15.jpg" alt=""
                                                            width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="assets_dashboard/images/avatar/1.jpg" alt=""
                                                        width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="assets_dashboard/images/items/16.jpg" alt=""
                                                            width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="assets_dashboard/images/avatar/2.jpg" alt=""
                                                        width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="assets_dashboard/images/items/17.jpg" alt=""
                                                            width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="assets_dashboard/images/avatar/3.jpg" alt=""
                                                        width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input type="checkbox"
                                                            class="form-check-input" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img
                                                            src="assets_dashboard/images/items/18.jpg" alt=""
                                                            width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="assets_dashboard/images/avatar/4.jpg" alt=""
                                                        width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
