<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"  href="/">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Home page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/produks*') ? 'active' : '' }}" href="/dashboard/produks">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Pelatihan Atlit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/tentangs*') ? 'active' : '' }}" href="/dashboard/tentangs">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Rekomendasi Asupan Gizi 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/layanans*') ? 'active' : '' }}" href="/dashboard/layanans">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Riwayat Atlit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/portofolios*') ? 'active' : '' }}" href="/dashboard/portofolios">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Statistik Atlit
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-3 bg-white border-0">Logout<span data-feather="log-out"
                                class="align-text-bottom"></span></button>
                    </form>
                </div>
            </div>
        </ul>
    </div>
</nav>
