<header>
    <div class="topbar d-flex align-items-center">

        <nav class="navbar navbar-expand">

            {{-- Logo --}}
            <div class="topbar-logo-header">

                <div>
                    <img loading="lazy" src="{{ asset('assets/guru/images/logo-itbrp.png') }}"
                        class="logo-icon"
                        alt="logo icon">
                </div>

                <div>
                    <h4 class="logo-text mb-0">
                        AZIFA
                    </h4>
                </div>

            </div>

            {{-- Tombol Sidebar --}}
            <div class="mobile-toggle-menu">
                <i class="bx bx-menu"></i>
            </div>

            {{-- Tulisan Tengah --}}
            <div class="ms-auto d-flex align-items-center">

                <div class="text-end me-4">

                    <h5 class="mb-0 text-white fw-bold">
                        👋 Selamat Datang, Guru
                    </h5>

                    <small class="text-white">
                        📅 {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                    </small>

                </div>

            </div>

            {{-- User --}}
            <div class="user-box dropdown">

                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">

                    <img loading="lazy" src="{{ asset('assets/guru/images/user.png') }}"
                        class="user-img"
                        alt="user avatar">

                    <div class="user-info ps-3">

                        <p class="user-name mb-0">
                            Guru
                        </p>

                        <p class="designattion mb-0">
                            PAUD Terpadu Azifa
                        </p>

                    </div>

                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>

                        <form action="{{ route('logout') }}" method="POST">

                            @csrf

                            <button type="submit" class="dropdown-item">

                                <i class="bx bx-log-out-circle"></i>

                                <span>Logout</span>

                            </button>

                        </form>

                    </li>

                </ul>

            </div>

        </nav>

    </div>
</header>