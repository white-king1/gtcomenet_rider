@extends('layouts.dashboard_layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-3">
            <h1>Riders</h1>

        </div>
        <div class="col-md-7">
            <ul>
                @foreach($riders as $rider)
                    <li>
                        <a href="{{ route('riders.show', $rider->id) }}">{{ $rider->name }}</a> - Average Rating: {{ $rider->averageRating() }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>

@endsection

