<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
</head>
<body>

    <header class="top-header">
        <nav class="navbar">
            <div class="container">
                <ul class ="menu">
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    <li><a href="{{ route('profile')}}">Profile</a></li>
                    <li><a href="{{ route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="body-content">
        <div class="container">

            @session("success")
                <div class="alert" id="success alert">
                   {{session("success")}}
                </div>
            @endsession
          

          @yield("content")

        </div>
    </div>

</body>
</html>