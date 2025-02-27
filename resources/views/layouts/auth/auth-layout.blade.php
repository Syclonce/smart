<!doctype html>
<html lang="en">
<head>
    @include('layouts.auth.header')
</head>

<body class="auth-body-bg">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Left Side (Carousel / Branding) -->
                @include('layouts.auth.auth-carousel')

            <!-- Right Side (Auth Form) -->
            <div class="col-xl-3">
                <div class="auth-full-page-content p-md-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="{{ asset('/assets/images/logo-dark.png') }}" alt="" height="18" class="auth-logo-dark">
                                    <img src="{{ asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light">
                                </a>
                            </div>
                            @yield('content')

                            @include('layouts.auth.footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.auth.scripts')
</body>
</html>
