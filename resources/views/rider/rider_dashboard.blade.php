@extends('layouts.rider_dashboard_layouts')
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










            </div>
        </div>
    </div>
@endsection
