<!-- resources/views/components/missions-section.blade.php -->

<section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="{{ asset('assets/images/image1/png') }}" alt="AMRUT Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">AMRUT Mission</h3>
                    <p class="text-gray-600 mb-4">Ensuring robust infrastructure and urban transformation.</p>
                    <a href="/missions/amrut" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="/images/swachh-bharat.jpg" alt="Swachh Bharat Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Swachh Bharat Mission</h3>
                    <p class="text-gray-600 mb-4">Achieving cleanliness and hygiene across urban areas.</p>
                    <a href="/missions/swachh-bharat" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
                <img src="/images/smart-city.jpg" alt="Smart City Mission" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Smart City Mission</h3>
                    <p class="text-gray-600 mb-4">Developing smart and sustainable urban spaces.</p>
                    <a href="/missions/smart-city" class="text-primary hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>


