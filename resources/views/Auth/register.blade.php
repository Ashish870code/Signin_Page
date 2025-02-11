@extends("layouts.app")

@section("title","Register Page")

@section("content")
<form class="from" action="{{ route('register') }}" method="post">
            <h2>Register</h2>
            @csrf
            <div class ="form-group">
                <input type="text" name="name" placeholder="Enter your name" required>
                @error("name")
                    <div class='error'>{{ $message}}</div>
                @enderror
            </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    @error("email")
                    <div class='error'>{{ $message}}</div>
                @enderror
                </div>
                
                <div class="form-group">
                        <input type="password" name="password" placeholder="Enter your password" required>
                        @error("password")
                    <div class='error'>{{ $message}}</div>
                @enderror
                </div>
                        
                <div class="form-group">
                            <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                            
                <button type="submit" name="submit">Register</button>
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a>
                            </p>
        </form>
@endsection