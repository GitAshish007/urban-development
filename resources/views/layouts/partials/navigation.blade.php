
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
            <nav class="flex items-center justify-between py-1">
                <button class="text-black md:hidden flex items-center space-x-2">
                    <span>Main Menu</span>
                    <div class="space-y-1">
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                        <div class="w-6 h-1 bg-black"></div>
                    </div>
                </button>
                <ul class="hidden md:flex items-center space-x-6">
                    <li><a href="/" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">About Us</a></li>
                    <li><a href="{{ route('contacts.index') }}" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Who's who</a></li>
                    <li><a href="#" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Department</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Government Order</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-48 z-10 text-sm focus:outline-none">
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Current</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Government Orders-Previous</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Financial Sanctions</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-48 z-10 focus:outline-none ">
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2024-25</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2023-24</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2022-23</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2021-22</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2020-21</a></li>
                            <li><a href="" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">FY 2019-20</a></li>
                            <!-- Add other years here -->
                        </ul>


                    </li>
                    <li><a href="#" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">RTI</a></li>
                    <li><a href="{{ route('contacts.index') }}" class="text-white hover:bg-zinc-600 h-15 w-20 py-2.5 px-2.5 rounded-md">Contact Us</a></li>
                    <li class="relative group">
                        <a href="#" class="text-white hover:bg-zinc-600 py-2.5 px-2.5 rounded-md">G20 Gallery</a>
                        <ul class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 z-10 w-48 rounded-md focus:outline-none">
                            <li><a href="#" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Image Gallery</a></li>
                            <li><a href="#" target="_blank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Video Gallery</a></li>
                        </ul>
                    </li>
                </ul>
                <div>
                    <button class="text-white hover:bg-zinc-600 h-15 w-20 py-1 px-1 rounded-md">
                        <a href="{{route('login')}}">Sign in</a>
                    </button>
                </div>
            </nav>

        </div>
    </div>
</div>

