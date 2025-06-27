<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Elite Academic Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard-active')">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item @yield('customer-active')">
        <a class="nav-link" href="{{ route('admin.users.get') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item @yield('author-active')">
        <a class="nav-link" href="{{ route('admin.authors.index') }}">
            <i class="fas fa-fw fa-pen"></i>
            <span>Author</span></a>
    </li>

    <li class="nav-item @yield('theme-active')">
        <a class="nav-link" href="{{ route('admin.themes.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Themes</span></a>
    </li>

    <li class="nav-item @yield('article-active')">
        <a class="nav-link" href="{{ route('admin.articles.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Articles</span></a>
    </li>

    <li class="nav-item @yield('consultancy-active')">
        <a class="nav-link" href="{{ route('admin.consultancy_requests.index') }}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Consultancy Requests</span></a>
    </li>
    
    <li class="nav-item @yield('orders-active')">
        <a class="nav-link" href="{{ route('admin.orders.get') }}">
            <i class="fas fa-fw fa-sort"></i>
            <span>Orders</span></a>
    </li>
</ul>