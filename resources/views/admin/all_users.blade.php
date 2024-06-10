@extends('layouts.master_admin_layouts')
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
                            <h4 class="card-title">REGISTERED USERS </h4>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Account_number</th>
                                                <th>Account Balance</th>
                                                <th>UserType</th>
                                                <th>status</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registeredUsers as $user)
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
                                                                <h6 class="mb-0">{{ $user->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->email }}</td>
                                                    <td> {{ $user->phone }}</td>
                                                    <td> {{ $user->account_number }}</td>
                                                    <td>{{ $user->balance }}</td>
                                                    <td>{{ $user->usertype }}</td>
                                                    <td>{{ $user->status}}</td>

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

    <div class="content-body">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">CONVERT REGISTERED USERS TO AN ADMIN OR A RIDER </h4>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Account_number</th>
                                                <th>Account Balance</th>
                                                <th>UserType</th>
                                                <th>status</th>
                                                <th>Action</th>
                                                <th>Action</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($registeredUsers as $user)
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
                                                                <h6 class="mb-0">{{ $user->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->email }}</td>
                                                    <td> {{ $user->phone }}</td>
                                                    <td> {{ $user->account_number }}</td>
                                                    <td>{{ $user->balance }}</td>
                                                    <td>{{ $user->usertype }}</td>
                                                    <td>{{ $user->status}}</td>




                                                    <td>
                                                        <form action="{{ route('switch.rider', $user->id) }}"
                                                            method="POST">@csrf


                                                            @if ($user->usertype != 'rider')
                                                                 <button class="btn btn-success"
                                                                    type="submit" style="width:120px;">Rider</button>
                                                            @endif


                                                        </form>

                                                        {{-- <span><i class="ri-check-line text-success me-1"></i></span><span><i
                                                                    class="ri-close-line text-danger"></i>
                                                            </span> --}}
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('switch.admin', $user->id) }}"
                                                            method="POST">@csrf


                                                            @if ($user->usertype != 'admin')
                                                                 <button class="btn btn-success"
                                                                    type="submit" style="width:120px;">Admin</button>
                                                            @endif


                                                        </form>

                                                        {{-- <span><i class="ri-check-line text-success me-1"></i></span><span><i
                                                                    class="ri-close-line text-danger"></i>
                                                            </span> --}}
                                                    </td>



                                                    <td>
                                                        <a href="{{ route('delete.users', $user->id) }}" class="btn btn-danger"
                                                            type="submit">Delete
                                                        </a>
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
