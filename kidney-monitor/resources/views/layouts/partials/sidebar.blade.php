<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/') }}">
            <img src="{{ asset('template/assets/images/logo.svg') }}" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/') }}">
            <img src="{{ asset('template/assets/images/logo-mini.svg') }}" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <!-- Profile Settings -->
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle" src="{{ asset('template/assets/images/faces/face15.jpg') }}"
                            alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            @php
                                $namaLengkap = explode(' ', Auth::user()->nama_lengkap);
                                $namaDuaKata = implode(' ', array_slice($namaLengkap, 0, 2));
                            @endphp
                            {{ $namaDuaKata }}
                        </h5>
                        <span>{{ ucfirst(Auth::user()->role) }} Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <!-- Nav Menu -->
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('homepage') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">Homepage</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('cek-ginjal.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Cek Ginjal</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-nutrition"></i>
                </span>
                <span class="menu-title">Panduan Kesehatan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('panduan/aktivitas-fisik') }}">Aktivitas
                            Fisik</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('panduan/pola-makan-sehat') }}">Pola Makan
                            Sehat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('panduan/berat-badan') }}">Berat Badan</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('panduan/manajemen-stress') }}">Manajemen
                            Stress</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('riwayat') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-pencil"></i>
                </span>
                <span class="menu-title">Riwayat</span>
            </a>
        </li>
    </ul>
</nav>
