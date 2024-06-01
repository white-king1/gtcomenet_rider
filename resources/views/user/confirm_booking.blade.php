@extends('layouts.dashboard_layout')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Booking Details</h3>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="{{ route('user.dashboard') }}">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="{{ route('confirm.booking') }}">Booking
                                details</a></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Your Booking Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row d-flex">
                                @if (!empty($post_booking) && $post_booking->count() > 0)
                                    @foreach ($post_booking as $booking)
                                        <div class="col-md-3 mb-3">
                                            <img src="/art_images/{{ $img->name }}" alt="Image" class="img-fluid" style="width:100%; height: 100%;">
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images uploaded</p>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="form-label" for="itemDescription">Item Description:</label>
                                <div class="container card card-body">
                                    @if (!empty($post_booking) && isset($post_booking[0]->booking))
                                        <h4>{{ $post_booking[0]->booking->item_description }}</h4>
                                    @else
                                        <p>No item description available</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="form-label" for="quantity">Quantity:</label>
                                <div class="container card card-body">
                                    @if (!empty($post_booking) && isset($post_booking[0]->booking))
                                        <h4>{{ $post_booking[0]->booking->quantity }}</h4>
                                    @else
                                        <p>No quantity available</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="container card card-body mb-3">
                            <p>Congratulations! Your booking is successful. Kindly copy the URL below and contact your rider.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyFunction() {

            var text = $('#text').html();
            console.log(text);
            navigator.clipboard.writeText(text);
            alert('Text copied');
        }
    </script>
@endsection
