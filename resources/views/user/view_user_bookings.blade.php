@extends('layouts.dashboard_layout')
@section('content')
    @if (Session::has('flash_message'))
        <center>
            <div class="alert {{ Session::get('flash_type') }} col-md-4">
                <h6>{{ Session::get('flash_message') }}</h6>
            </div>
        </center>
    @endif
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">User  Bookings </h4>
                        </div>
                        <div class="card-body bs-0 bg-transparent p-0">
                            <div class="bid-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input type="checkbox" class="form-check-input"
                                                            value="" id="flexCheckDefault">
                                                    </div>
                                                </th>
                                                <th>Item description</th>
                                                <th>Quantity</th>
                                                <th>Booking ID</th>
                                                <th>Location</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($viewUserB as $post_booking)
                                                <tr>
                                                    <td>
                                                        <div class="form-check"><input type="checkbox"
                                                                class="form-check-input" value=""
                                                                id="flexCheckDefault">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            {{-- <img src="assets_dashboard/images/items/15.jpg" alt=""
                                                                width="60" class="me-3 rounded"> --}}
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">{{ $post_booking->item_description }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $post_booking->quantity }}</td>
                                                    <td> {{ $post_booking->booking_id }}</td>
                                                    {{-- <td><img src="assets_dashboard/images/avatar/1.jpg" alt=""
                                                                width="40" class="me-2 rounded-circle">0.0025 ETH</td> --}}
                                                    <td> {{ $post_booking->location }}</td>

                                                    <td>{{ $post_booking->status }}</td>



                                                    <td>
                                                        <form action="{{ route('just.recieved', $post_booking->id) }}"
                                                            method="POST">@csrf


                                                            @if ($post_booking->status != 'completed')
                                                                Click if=> <button class="btn btn-success"
                                                                    type="submit">Accept</button>
                                                            @endif


                                                        </form>

                                                        {{-- <span><i class="ri-check-line text-success me-1"></i></span><span><i
                                                                    class="ri-close-line text-danger"></i>
                                                            </span> --}}
                                                    </td>
                                                </tr>
                                            @endforeach

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
