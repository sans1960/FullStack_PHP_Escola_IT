<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
</head>
<body>
    <nav class="uk-navbar-container uk-margin" uk-navbar>
        <div class="uk-navbar-center">

            <div class="uk-navbar-center-left"><div>
                <ul class="uk-navbar-nav">
                    <li class=""><a href="{{ url('/')}}">Home</a></li>
                    <li>
                        <li class=""><a href="{{ url('/catalog')}}">Catalog</a></li>
                    </li>
                </ul>
            </div></div>
            <a class="uk-navbar-item uk-logo" href="#"><img src="{{ asset('assets/images/book.png')}}" width="80" alt=""></a>
            <div class="uk-navbar-center-right"><div>
                <ul class="uk-navbar-nav">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a class="uk-margin-small-left uk-text-bold uk-text-success">{{Cookie::get('status')}}</a></li>

                </ul>

            </div></div>

        </div>
    </nav>

    @yield('content')

    <div class="uk-container uk-text-center uk-margin-medium-top">
        <p class="uk-text-italic">Albert Sans 2021</p>
    </div>
</body>
</html>
