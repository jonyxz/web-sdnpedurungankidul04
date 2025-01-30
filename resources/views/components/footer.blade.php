<footer class="bg-gray-900 text-white py-10">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Tautan -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Tautan</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="https://www.kemdikbud.go.id/" class="hover:text-blue-300 transition duration-300">Kemendikbud</a>
                    </li>
                    <li>
                        <a href="http://disdik.semarangkota.go.id/" target="_blank" class="hover:text-blue-300 transition duration-300">Dinas Pendidikan</a>
                    </li>
                </ul>
            </div>

            <!-- Ikuti Kami -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="https://web.facebook.com/SDNPedurunganKidul04" target="_blank" class="text-blue-500 hover:text-blue-300 transition duration-300">
                        <i class="fab fa-facebook-f h-6 w-6"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC-tpimeqCvFTRV8e31bpbXQ" target="_blank" class="text-red-500 hover:text-red-300 transition duration-300">
                        <i class="fab fa-youtube h-6 w-6"></i>
                    </a>
                    <a href="https://instagram.com/sdnpedurungankidul04?igshid=ZDdkNTZiNTM=" target="_blank" class="text-pink-500 hover:text-pink-300 transition duration-300">
                        <i class="fab fa-instagram h-6 w-6"></i>
                    </a>
                </div>
            </div>

            <!-- Kontak -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Kontak</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <i class="fas fa-envelope h-6 w-6 mr-2"></i>
                        <a href="mailto:sdn.pedurungankidul.04@gmail.com" class="hover:text-blue-300 transition duration-300">sdn.pedurungankidul.04@gmail.com</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt h-6 w-6 mr-2"></i> 081390565430
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt h-6 w-6 mr-2"></i> Jalan Blancir Raya RT 06 RW 12
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-8 pt-4 text-center">
            <p class="text-sm">&copy; <span id="year"></span> SDN PEDURUNGAN KIDUL 04. All rights reserved.</p>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <a href="#" class="fixed bottom-5 right-5 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-500 transition duration-300 transform hover:scale-110">
        <i class="fas fa-arrow-up h-6 w-6"></i>
    </a>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</footer>