<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Data Admin Blog</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i>Dashboard</a>

            </li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Post</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index-posts') }}">List Post</a></li>
                    <li><a class="nav-link" href="{{ route('sampah-posts') }}">List Post Sampah</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index') }}">List Category</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Tags</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index-tags') }}">List Tags</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index-user') }}">List User</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Pesan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index-contact') }}">List Pesan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Penulis</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index-penulis') }}">List Penilis</a></li>
                </ul>
            </li>

        </ul>


    </aside>
</div>
