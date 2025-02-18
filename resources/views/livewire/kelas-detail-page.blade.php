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

        <!-- Details -->
        <div class="site-section bg-gray-300">
            <div class="container mx-auto pt-20">
                @if($classroom)
                    <div class="pt-20 pb-10">
                        <h2 class="text-black font-bold">SDN PEDURUNGAN KIDUL 04</h2>
                        <span class="text-black font-education h5 d-block">Siswa {{ $classroom->name }}</span>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        @foreach($students as $student)
                            <div class="text-center bg-white rounded-lg shadow-sm">
                                <img alt="{{ $student->name }}" class="mx-auto mb-2 mt-3" height="100" 
                                    src="{{ $student->photo ? asset('storage/'.$student->photo) : asset('assets/images/sdn/siswa.jpg') }}" 
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