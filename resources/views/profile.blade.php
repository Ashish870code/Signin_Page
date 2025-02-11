@extends("layouts.layout")

@section("title", "Profile Page")

@section("content")
<h2> Profile </h2>
<form action="{{ route('profile') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
        @error("name")
        <div class="error">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" disabled>
    </div>

    <div class="form-group">
        <button type="submit">Update Profile</button>
    </div>
</form>
@endsection
