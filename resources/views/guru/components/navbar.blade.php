<div class="nav-container primary-menu">
    <div class="mobile-topbar-header">
        <div>
            <img loading="lazy" src="{{ asset('assets/guru/images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
        </div>

        <div>
            <h4 class="logo-text">UAS</h4>
        </div>

        <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-to-left"></i>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl w-100">
        <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">

            {{-- Dashboard --}}
            <li class="nav-item">
                <a href="{{ route('dashboard.guru') }}"
                    class="nav-link {{ request()->routeIs('dashboard.guru') ? 'active text-white' : '' }}"
                    aria-current="page">

                    <div class="parent-icon">
                        <i class="bx bx-home-circle"></i>
                    </div>

                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            {{-- Kelola Materi --}}
            <li class="nav-item dropdown">

                <a href="javascript:;"
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret
                    {{ request()->routeIs('materi.*') ? 'active text-white' : '' }}"
                    data-bs-toggle="dropdown">

                    <div class="parent-icon">
                        <i class="bx bx-book"></i>
                    </div>

                    <div class="menu-title">Kelola Materi</div>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('materi.angka') }}">

                            <i class="bx bx-note"></i>
                            Materi Angka
                        </a>
                    </li>

                        <li>
                            <a class="dropdown-item" href="/guru/materi-huruf">

                                <i class="bx bx-note"></i>
                                Materi Huruf

                            </a>
                        </li>

                </ul>
            </li>

            {{-- Quiz --}}
            <li class="nav-item dropdown">

                <a href="javascript:;"
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret
                    {{ request()->routeIs('quiz.*') ? 'active text-white' : '' }}"
                    data-bs-toggle="dropdown">

                    <div class="parent-icon">
                        <i class="bx bx-task"></i>
                    </div>

                    <div class="menu-title">Quiz</div>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('quiz.berhitung') }}">

                            <i class="bx bx-note"></i>
                            Quiz Berhitung
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('quiz.mengeja') }}">

                            <i class="bx bx-note"></i>
                            Quiz Mengeja
                        </a>
                    </li>

                </ul>
            </li>

            {{-- Kelola Murid --}}
            <li class="nav-item dropdown">

                <a href="javascript:;"
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret
                    {{ request()->routeIs('murid.*') ? 'active text-white' : '' }}"
                    data-bs-toggle="dropdown">

                    <div class="parent-icon">
                        <i class="bx bx-group"></i>
                    </div>

                    <div class="menu-title">Kelola Murid</div>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('murid.form') }}">

                            <i class="bx bx-note"></i>
                            Form Murid
                        </a>
                    </li>

                </ul>
            </li>

            {{-- Laporan --}}
            <li class="nav-item dropdown">

                <a href="javascript:;"
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret
                    {{ request()->routeIs('laporan.*') ? 'active text-white' : '' }}"
                    data-bs-toggle="dropdown">

                    <div class="parent-icon">
                        <i class="bx bx-file"></i>
                    </div>

                    <div class="menu-title">Laporan Belajar</div>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('laporan.nilai') }}">

                            <i class="bx bx-note"></i>
                            Nilai
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
</div>