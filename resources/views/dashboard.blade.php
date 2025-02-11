
@extends ('layouts.layout')

@section("title","Dashboard Page")

@section("contant")

<h2> hi "{{auth() -> user() ->name}}",</h2>
<p> welcome to dashboard page</p>

@endcontant