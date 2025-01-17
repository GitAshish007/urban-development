
<div class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-4">
                <div class="w-20">
                    <img src="{{asset('images/Seal_of_Uttar_Pradesh.svg')}}" alt="Seal of UP">
                </div>
                <div class="text-center ">
                    <h1 class="text-orange-800 text-4xl font-bold">
                        नगर विकास विभाग, उत्तर प्रदेश शासन
                    </h1>
                    <h4 class="text-zinc-600 text-lg font-semibold">
                        Urban Development Department, Govt. of U.P.
                    </h4>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src="{{asset('images/Swachh-Bharat-Logo.png')}}" alt="Swachh Bharat Logo" class="h-16">
                <div class="relative">
                    <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-600">
                        <i class="flaticon-world"></i>
                        <span>हिन्दी</span>
                    </button>
                    <ul class="absolute hidden bg-white shadow-md mt-2">
                        <li>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Eng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-orange-500">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-3">
                <button class="text-black md:hidden flex items-center space-x-2">
                    <span>Main Menu</span>
                    <div class="space-y-1">
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                    </div>
                </button>
                <ul class="hidden md:flex items-center space-x-6">
                    <li><a href="/" class="text-white hover:text-black">Home</a></li>
                    <li><a href="parichay.html" class="text-white hover:text-black">About Us</a></li>
                    <li><a href="{{ route('contacts.index') }}" class="text-white hover:text-black">Who's who</a></li>
                    <li><a href="#dept" class="text-white hover:text-black">Department</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">Government Order</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="GO_main_menu-2017.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Current</a></li>
                            <li><a href="GO_Anubhag.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Previous</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">Financial Sanctions</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="Financial_SenctionNewIF24-25.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2024-25</a></li>
                            <li><a href="Financial_SenctionNewIF23-24.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2023-24</a></li>
                            <li><a href="Financial_SenctionNewIF22-23.html" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2022-23</a></li>
                            <!-- Add other years here -->
                        </ul>
                    </li>
                    <li><a href="deg.htm" class="text-white hover:text-black">RTI</a></li>
                    <li><a href="{{ route('contacts.index') }}" class="text-white hover:text-black">Contact Us</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-black">G20 Gallery</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2">
                            <li><a href="https://uddg20.com/image-gallery" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Image Gallery</a></li>
                            <li><a href="https://uddg20.com/video-gallery" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Video Gallery</a></li>
                            <li><a href="https://uddg20.com/user" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">User Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

