<meta charset="utf-8" />
<title>@yield('title') | Dolpi</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="TeknoKode" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">

<!-- Load CSS -->
@include('layouts.auth.css')

@stack('styles')
