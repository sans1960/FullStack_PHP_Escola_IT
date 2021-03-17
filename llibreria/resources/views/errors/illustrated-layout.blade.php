<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>

    <body>

        <div class="uk-container">
            <div class="uk-grid-large uk-child-width-expand@s uk-text-center uk-margin-medium-top" uk-grid>
                <div>


                            <h3 class="uk-card-title">  @yield('code')</h3>
                            <p>  @yield('message').</p>
                            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                                <button class="uk-button uk-secondary">
                                    home
                                </button>
                            </a>

                </div>
                <div>

                        @yield('image')

                </div>

            </div>

        </div>
        <div class="uk-container uk-text-center uk-margin-medium-top">
            <p class="uk-text-italic">Albert Sans 2021</p>
        </div>
    </body>
</html>
