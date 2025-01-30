<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Hubungi Kami</h1>
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold">Alamat</h2>
        <p class="mt-2 text-gray-600">{{ $contact->address }}</p>

        <h2 class="text-xl font-semibold mt-4">Telepon</h2>
        <p class="mt-2 text-gray-600">{{ $contact->phone }}</p>

        <h2 class="text-xl font-semibold mt-4">Email</h2>
        <p class="mt-2 text-gray-600">{{ $contact->email }}</p>
    </div>
</div>