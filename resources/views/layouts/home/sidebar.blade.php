<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <li>
                <a href="{{ route('dashboard') }}" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Dashboards</span>
                </a>
            </li>

            <li class="menu-title" key="t-apps">Apps</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Role Manajemen</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('permission.create') }}" key="t-default">Default</a></li>

                    <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                    <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                    <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                    <li><a href="dashboard-job.html" key="t-jobs">Jobs</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
