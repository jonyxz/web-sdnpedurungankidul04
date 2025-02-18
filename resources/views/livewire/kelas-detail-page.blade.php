<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- Hero Section -->
        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset("assets/images/sdn/bg_asli.png") }}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 mt-5 pt-5">
                            <h1 class="mb-3 font-weight-bold text-teal">Profile Siswa</h1>
                            <p>
                                <a href="{{ url('/') }}" class="text-white">Beranda</a> 
                                <span class="mx-3">/</span> 
                                <a href="{{ url('/profile-siswa') }}" class="text-white">Profile Siswa</a> 
                                <span class="mx-3">/</span> 
                                <strong>{{ $classroom->name }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Details -->
        <div class="site-section bg-gray-200">
            <div class="container mx-auto">
                @if($classroom)
                    <div class="pb-10">
                        <h2 class="text-black font-bold">SDN PEDURUNGAN KIDUL 04</h2>
                        <span class="text-black font-education h5 d-block">Siswa {{ $classroom->name }}</span>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        @foreach($students as $student)
                            <div class="text-center bg-white rounded-lg shadow-sm">
                                <img alt="{{ $student->name }}" class="mx-auto mb-2 mt-3" height="100" 
                                    src="{{ $student->photo ? asset('storage/'.$student->photo) : asset('assets/images/sdn/siswa.png') }}" 
                                    width="100" />
                                <p class="font-bold">{{ $student->name }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center">Kelas tidak ditemukan.</p>
                @endif
            </div>            
        </div>
</body>