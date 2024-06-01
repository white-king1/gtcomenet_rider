@extends('layouts.dashboard_layout')
@section('content')
<h1>{{ $rider->name }}</h1>
<p>Average Rating: {{ $rider->averageRating() }}</p>

<h2>Ratings</h2>
<ul>
    @foreach($rider->ratings as $rating)
        <li>User {{ $rating->user_id }}: {{ $rating->rating }}</li>
    @endforeach
</ul>

@auth
<h2>Rate this Rider</h2>
<form action="{{ route('ratings.store', ['id' => $rider->id]) }}" method="POST">
    @csrf
    <label for="rating">Rating (1 to 5):</label>
    <input type="number" name="rating" id="rating" min="1" max="5" required>
    <button type="submit">Submit</button>
</form>
@endsection

