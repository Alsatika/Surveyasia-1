<nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow-sm">
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 ms-4 ms-lg-0" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/"><img src="/assets/img/surveyasia.png" alt="Surveyasia" width="150"></a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-fw"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-user-friends fa-fw"></i> Jadi Responden</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt fa-fw"></i>
                            Keluar</a></button>
                    </form>
                </li>
            </ul>
        </li>
        @endauth
    </ul>
</nav>