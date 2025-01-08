@props(['title', 'description', 'image', 'link'])
<div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition-transform">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-48 object-cover">
    <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <a href="{{ $link }}" class="text-[#FF5722] hover:underline">Learn More</a>
    </div>
</div>
