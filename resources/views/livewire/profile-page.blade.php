<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Profil Sekolah</h1>
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold">Sejarah</h2>
        <p class="mt-2 text-gray-600">{{ $profile->history }}</p>

        <h2 class="text-xl font-semibold mt-4">Visi</h2>
        <p class="mt-2 text-gray-600">{{ $profile->vision }}</p>

        <h2 class="text-xl font-semibold mt-4">Misi</h2>
        <p class="mt-2 text-gray-600">{{ $profile->mission }}</p>
    </div>
</div>