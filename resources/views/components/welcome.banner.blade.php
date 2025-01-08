<header class="bg-[#F79327] text-white text-center py-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">{{ $title ?? 'Welcome to the Urban Development Department' }}</h1>
        <p class="text-lg mb-6">{{ $subtitle ?? 'Driving the transformation of Uttar Pradesh through smart, sustainable urban solutions.' }}</p>
        <a href="{{ $ctaLink ?? '/about' }}" class="bg-white text-[#FF5722] px-6 py-3 rounded-lg shadow-lg hover:bg-[#FF5722] hover:text-white transition">
            {{ $ctaText ?? 'Learn More' }}
        </a>
    </div>
</header>
