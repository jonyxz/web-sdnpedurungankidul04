<header class="site-navbar site-navbar-target" role="banner">

    <div class="container mb-3">
        <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/sdn/logo_sdn.png') }}" alt="Logo SDN"></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                <div class="d-flex site-info align-items-center mr-4">
                    <span class="block-icon mr-3"><span class="icon-envelope text-blue-800"></span></span>
                    <span>Email Kami<br><a href="mailto:sdn.pedurungankidul.04@gmail.com" class="text-black font-bold">sdn.pedurungankidul.04@gmail.com</a></span>
                </div>
                <div class="d-flex site-info align-items-center mr-4">
                    <span class="block-icon mr-3"><span class="icon-phone text-yellow-500"></span></span>
                    <span>Hubungi Kami<br><a class="text-white">081390565430</a></span>
                </div>
                <div class="d-flex site-info align-items-center">
                    <span class="block-icon mr-3"><span class="icon-comments text-green-500"></span></span>
                    <span>Pengaduan<br><a wire:navigate href="{{ url('/contact') }}" class="text-black font-bold">Klik Mengeluh</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>
            <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a wire:navigate href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                    <li class="has-children {{ request()->is('profile-sekolah', 'profile-guru', 'profile-siswa') ? 'active' : '' }}">
                        <a href="#" class="nav-link">Profile</a>
                        <ul class="dropdown">
                            <li><a wire:navigate href="{{ url('/profile-sekolah') }}" class="nav-link">Profile Sekolah</a></li>
                            <li><a wire:navigate href="{{ url('/profile-guru') }}" class="nav-link">Profile Guru</a></li>
                            <li><a wire:navigate href="{{ url('/profile-siswa') }}" class="nav-link">Profile Siswa</a></li>
                        </ul>
                    </li>
                    <li class="has-children {{ request()->is('foto', 'https://www.youtube.com/@sdnpedurungankidul0456') ? 'active' : '' }}">
                        <a href="#" class="nav-link">Galeri</a>
                        <ul class="dropdown">
                            <li><a wire:navigate href="{{ url('/foto') }}" class="nav-link">Foto</a></li>
                            <li><a href="{{ url('https://www.youtube.com/@sdnpedurungankidul0456') }}" class="nav-link">Video</a></li>
                        </ul>
                    </li>
                    <li class="has-children {{ request()->is('https://buku.kemdikbud.go.id/panduan/siswa', 'https://www.youtube.com/channel/UC3jxLXIqktSuXVXxbr2I61Q') ? 'active' : '' }}">
                        <a href="#" class="nav-link">Akademik</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('https://buku.kemdikbud.go.id/panduan/siswa') }}" class="nav-link">Buku Siswa</a></li>
                            <li><a href="{{ url('https://www.youtube.com/channel/UC3jxLXIqktSuXVXxbr2I61Q') }}" class="nav-link">Video Pembelajaran</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('news') ? 'active' : '' }}"><a wire:navigate href="{{ url('/news') }}" class="nav-link">Berita</a></li>
                    <li class="{{ request()->is('announcement') ? 'active' : '' }}"><a wire:navigate href="{{ url('/announcement') }}" class="nav-link">Pengumuman</a></li>
                    <li class="has-children {{ request()->is('https://ppd.semarangkota.go.id/', 'https://disdiksmg.semarangkota.go.id/', 'https://sangjuara.semarangkota.go.id/') ? 'active' : '' }}">
                        <a href="#" class="nav-link">Website Terkait</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('https://ppd.semarangkota.go.id/') }}" class="nav-link">Website PPDB 2024/2025</a></li>
                            <li><a href="{{ url('https://disdiksmg.semarangkota.go.id/') }}" class="nav-link">Website Disdik</a></li>
                            <li><a href="{{ url('https://sangjuara.semarangkota.go.id/') }}" class="nav-link">Website Sang Juara</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('kontak') ? 'active' : '' }}"><a wire:navigate href="{{ url('/kontak') }}" class="nav-link">Kontak</a></li>
                </ul>
            </nav>

            <div class="top-social ml-auto flex space-x-2">
                <a href="https://web.facebook.com/SDNPedurunganKidul04" class="rounded-full border border-gray-300 p-2 flex items-center justify-center w-9 h-9 hover:bg-gray-200"><span class="icon-facebook text-blue-700 flex items-center justify-center"></span></a>
                <a href="https://www.youtube.com/channel/UC-tpimeqCvFTRV8e31bpbXQ" class="rounded-full border border-gray-300 p-2 flex items-center justify-center w-9 h-9 hover:bg-gray-200"><span class="icon-youtube text-red flex items-center justify-center"></span></a>
                <a href="https://instagram.com/sdnpedurungankidul04?igshid=ZDdkNTZiNTM=" class="rounded-full border border-gray-300 p-2 flex items-center justify-center w-9 h-9 hover:bg-gray-200"><span class="icon-instagram text-pink flex items-center justify-center"></span></a>
                <a wire:navigate href="{{ url('/admin/login') }}" class="rounded-full border border-gray-300 p-2 flex items-center justify-center w-9 h-9 hover:bg-gray-200"><img src="{{ asset('assets/images/login.png') }}" alt="Login"></a>
            </div>
        </div>
    </div>
</header>