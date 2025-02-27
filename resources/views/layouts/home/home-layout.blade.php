<!doctype html>
<html lang="en">
    <head>
        @include('layouts.home.header')
    </head>

    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- topbar Start -->
            <header id="page-topbar">
                @include('layouts.home.topbar')
            </header>
            <!-- topbar End -->


            <!-- Sidebar Start -->
            <div class="vertical-menu">
                @include('layouts.home.sidebar')
            </div>
            <!-- Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <!-- start Page-content -->
                <div class="page-content">
                    @yield('content')
                </div>
                <!-- End Page-content -->

                <!-- start footer -->
                @include('layouts.home.footer')
                <!-- End footer -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('layouts.home.scripts')

    </body>
</html>
