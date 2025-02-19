<div class="bg-orange-500">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-3">
{{--            <x-mobile-menu />--}}
            <ul class="hidden md:flex items-center space-x-6">
                <x-nav-item href="#" text="Home" />
                <x-nav-item href="{{ route('about') }}" text="About Us" />
                <x-nav-item href="{{ route('organogram') }}" text="Organogram" />
                <x-nav-item href="#dept" text="Department" />
                <x-nav-dropdown text="Government Order">
                    <x-nav-dropdown-item href="{{ route('go.current') }}" text="Government Orders-Current" />
                    <x-nav-dropdown-item href="{{ route('go.previous') }}" text="Government Orders-Previous" />
                </x-nav-dropdown>
                <x-nav-dropdown text="Financial Sanctions">
                    <x-nav-dropdown-item href="{{ route('financial.2024-25') }}" text="FY 2024-25" />
                    <x-nav-dropdown-item href="{{ route('financial.2023-24') }}" text="FY 2023-24" />
                    <x-nav-dropdown-item href="{{ route('financial.2022-23') }}" text="FY 2022-23" />
                </x-nav-dropdown>
                <x-nav-item href="{{ route('rti') }}" text="RTI" />
                <x-nav-item href="{{ route('contact') }}" text="Contact Us" />
                <x-nav-dropdown text="G20 Gallery">
                    <x-nav-dropdown-item href="https://uddg20.com/image-gallery" text="Image Gallery" external="true" />
                    <x-nav-dropdown-item href="https://uddg20.com/video-gallery" text="Video Gallery" external="true" />
                    <x-nav-dropdown-item href="https://uddg20.com/user" text="User Login" external="true" />
                </x-nav-dropdown>
            </ul>
        </nav>
    </div>
</div>
