<header class="relative z-10 h-[250px] xs:h-[280px] sm:h-[320px] md:h-[380px] lg:h-[420px] overflow-hidden">
  
  <style>[x-cloak] { display: none !important; }</style>

  <img src="{{ asset('img/banner.jpg') }}" 
       class="w-full h-full object-cover object-center" 
       alt="Header Banner">

  <div class="absolute top-0 left-0 w-full">
    <div class="relative z-30 max-w-7xl mx-auto flex items-center justify-between px-3 sm:px-4 md:px-6 pt-3 sm:pt-4 md:pt-5 lg:pt-6 xl:pt-8 text-white">
      
      <a href="/" class="flex-shrink-0">
        <img src="{{ asset('img/logo.png') }}" 
             alt="Logo" 
             class="h-7 sm:h-8 md:h-10 lg:h-12 w-auto">
      </a>

      <nav class="hidden lg:flex space-x-4 xl:space-x-6 2xl:space-x-8 font-semibold text-sm xl:text-base">
        <a href="/" class="hover:text-black transition-colors">Home</a>

        <div class="relative group">
          <a href="#" class="hover:text-black transition-colors flex items-center">
            About Us 
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <ul class="absolute left-0 w-48 xl:w-52 hidden group-hover:block bg-white text-gray-800 rounded-lg shadow-xl overflow-hidden">
            <li><a href="/visimisi" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Vision and Mission</a></li>
            <li><a href="/companyoverview" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Company Overview</a></li>
            <li><a href="/teamstructure" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Team Structure</a></li>
          </ul>
        </div>

        <div class="relative group">
          <a href="#" class="hover:text-black transition-colors flex items-center">
            Products
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <ul class="absolute left-0 w-48 xl:w-52 hidden group-hover:block bg-white text-gray-800 rounded-lg shadow-xl overflow-hidden">
            <li><a href="/product/1" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Sunward</a></li>
            <li><a href="/product/2" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">UD Trucks</a></li>
            <li><a href="/product/3" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Shacman</a></li>
            <li><a href="/product/4" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors">Liugong</a></li>
            <li><a href="{{ route('products.index') }}" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-black transition-colors border-t">All Products</a></li>
          </ul>
        </div>

        <a href="/news" class="hover:text-black transition-colors">News</a>
        <a href="/contact" class="hover:text-black transition-colors">Contact</a>
        <a href="/career" class="hover:text-black transition-colors">Career</a>
        <a href="{{ route('login') }}" class="hover:text-black transition-colors">Admin</a>
      </nav>

      <div x-data="{ open: false }" class="lg:hidden relative z-50">
        <button @click="open = !open" class="p-1.5 sm:p-2 border rounded-lg bg-white text-gray-800 hover:bg-gray-100 transition-colors">
          <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>

        <div
          x-show="open"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 -translate-y-2"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 -translate-y-2"
          @click.outside="open = false"
          x-cloak
          class="bg-white text-gray-800 shadow-2xl rounded-xl fixed top-12 sm:top-14 md:top-16 left-2 right-2 sm:left-3 sm:right-3 md:left-4 md:right-4 max-h-[calc(100vh-80px)] sm:max-h-[calc(100vh-100px)] overflow-y-auto z-50">
          <nav class="flex flex-col p-2 sm:p-3 md:p-4 space-y-0.5 sm:space-y-1 font-semibold text-xs sm:text-sm md:text-base">

            <a href="/" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors">Home</a>

            <div x-data="{ aboutOpen: false }" class="border-t border-gray-100">
              <button @click="aboutOpen = !aboutOpen" class="flex justify-between items-center w-full py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 rounded-lg transition-colors hover:text-white">
                <span>About Us</span>
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-4 w-4 sm:h-5 sm:w-5 transition-transform duration-200" 
                     :class="aboutOpen ? 'rotate-180' : ''" 
                     fill="none" 
                     viewBox="0 0 24 24" 
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="aboutOpen" 
                   x-transition:enter="transition ease-out duration-200"
                   x-transition:enter-start="opacity-0 -translate-y-1"
                   x-transition:enter-end="opacity-100 translate-y-0"
                   x-cloak 
                   class="ml-2 sm:ml-3 space-y-0.5 sm:space-y-1 pb-1.5 sm:pb-2">
                <a href="/visimisi" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Vision and Mission</a>
                <a href="/companyoverview" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Company Overview</a>
                <a href="/teamstructure" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Team Structure</a>
              </div>
            </div>

            <div x-data="{ productsOpen: false }" class="border-t border-gray-100">
              <button @click="productsOpen = !productsOpen" class="flex justify-between items-center w-full py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 rounded-lg hover:text-white transition-colors">
                <span>Products</span>
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-4 w-4 sm:h-5 sm:w-5 transition-transform duration-200" 
                     :class="productsOpen ? 'rotate-180' : ''" 
                     fill="none" 
                     viewBox="0 0 24 24" 
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="productsOpen" 
                   x-transition:enter="transition ease-out duration-200"
                   x-transition:enter-start="opacity-0 -translate-y-1"
                   x-transition:enter-end="opacity-100 translate-y-0"
                   x-cloak 
                   class="ml-2 sm:ml-3 space-y-0.5 sm:space-y-1 pb-1.5 sm:pb-2">
                <a href="/product/1" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Sunward</a>
                <a href="/product/2" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">UD Trucks</a>
                <a href="/product/3" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Shacman</a>
                <a href="/product/4" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Liugong</a>
                <a href="{{ route('products.index') }}" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm bg-yellow-50 hover:bg-yellow-400 hover:text-white rounded-lg transition-colors font-bold">All Products</a>
              </div>
            </div>

            <a href="/news" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors border-t border-gray-100">News</a>
            <a href="/contact" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors border-t border-gray-100">Contact</a>
            <a href="/career" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors border-t border-gray-100">Career</a>
            <a href="{{ route('login') }}" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors border-t-2 border-gray-200 mt-1 sm:mt-2 pt-2 sm:pt-3">Admin</a>
          </nav>
        </div>
      </div>
    </div>

    <div class="relative z-20 text-center mt-6 xs:mt-8 sm:mt-10 md:mt-12 lg:mt-16 xl:mt-20 px-3 sm:px-4">
      <h1 class="text-xl xs:text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-bold drop-shadow-lg leading-tight">
        @yield('title', 'Default Header Title')
      </h1>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</header>