<header 
  x-data="carousel()"
  x-init="init()"
  class="relative h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] xl:h-[650px] overflow-hidden">

  <template x-for="(image, index) in images" :key="index">
    <div 
      class="absolute inset-0"
      x-show="active === index"
      x-transition.opacity.duration.1000ms
    >
      <img :src="image" class="w-full h-full object-cover object-center" alt="Slider Image">
    </div>
  </template>

  <button @click="prevImage"
    class="absolute left-2 sm:left-3 md:left-4 lg:left-5 top-1/2 transform -translate-y-1/2 bg-black/40 text-white p-1.5 sm:p-2 md:p-3 rounded-full hover:bg-black/60 transition-all z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>

  <button @click="nextImage"
    class="absolute right-2 sm:right-3 md:right-4 lg:right-5 top-1/2 transform -translate-y-1/2 bg-black/40 text-white p-1.5 sm:p-2 md:p-3 rounded-full hover:bg-black/60 transition-all z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>

  <div class="absolute bottom-2 sm:bottom-3 md:bottom-5 lg:bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-1.5 sm:space-x-2 z-20">
    <template x-for="(image, index) in images" :key="index">
      <div @click="active = index"
        class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 rounded-full cursor-pointer transition-all"
        :class="active === index ? 'bg-yellow-400 scale-110' : 'bg-white/60 hover:bg-white/80'">
      </div>
    </template>
  </div>

  <div class="relative z-30 w-full">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-3 sm:px-4 md:px-6 pt-3 sm:pt-4 md:pt-6 lg:pt-8 xl:pt-10 text-white">

      <a href="/" class="flex-shrink-0">
        <img src="img/logo.png" alt="Logo" class="h-7 sm:h-8 md:h-10 lg:h-12 w-auto">
      </a>

      <nav class="hidden lg:flex space-x-4 xl:space-x-6 2xl:space-x-8 font-semibold text-sm xl:text-base">
        <a href="/" class="hover:text-yellow-400 transition-colors">Home</a>

        <div class="relative group">
          <a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
            About Us 
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <ul class="absolute left-0 w-48 hidden group-hover:block bg-white text-gray-800 rounded-lg shadow-xl overflow-hidden">
            <li><a href="/visimisi" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Vision & Mission</a></li>
            <li><a href="/companyoverview" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Company Overview</a></li>
            <li><a href="/teamstructure" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Team Structure</a></li>
          </ul>
        </div>

        <div class="relative group">
          <a href="#" class="hover:text-yellow-400 transition-colors flex items-center">
            Products
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <ul class="absolute left-0 w-48 hidden group-hover:block bg-white text-gray-800 rounded-lg shadow-xl overflow-hidden ">
            <li><a href="/product/1" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Sunward</a></li>
            <li><a href="/product/2" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">UD Trucks</a></li>
            <li><a href="/product/3" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Shacman</a></li>
            <li><a href="/product/4" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors">Liugong</a></li>
            <li><a href="{{ route('products.index') }}" class="block px-4 py-2.5 text-sm hover:bg-yellow-400 hover:text-white transition-colors border-t">All Products</a></li>
          </ul>
        </div>

        <a href="/news" class="hover:text-yellow-400 transition-colors">News</a>
        <a href="/contact" class="hover:text-yellow-400 transition-colors">Contact</a>
        <a href="/career" class="hover:text-yellow-400 transition-colors">Career</a>
        <a href="{{ route('login') }}" class="hover:text-yellow-400 transition-colors">Admin</a>
      </nav>

      <button @click="open = !open" class="lg:hidden p-1.5 sm:p-2 rounded-lg bg-black/30 hover:bg-black/50 transition-colors">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" 
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" 
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>

  <div x-show="open" 
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 -translate-y-2"
       x-transition:enter-end="opacity-100 translate-y-0"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100 translate-y-0"
       x-transition:leave-end="opacity-0 -translate-y-2"
       @click.outside="open = false"
       class="lg:hidden bg-white text-gray-800 shadow-2xl absolute top-12 sm:top-14 md:top-16 left-2 right-2 sm:left-3 sm:right-3 md:left-4 md:right-4 z-40 rounded-xl max-h-[calc(100vh-100px)] sm:max-h-[calc(100vh-120px)] overflow-y-auto">
    <nav class="flex flex-col p-2 sm:p-3 md:p-4 font-semibold text-xs sm:text-sm md:text-base">
      <a href="/" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors">Home</a>

      <div x-data="{ openAbout: false }" class="border-t border-gray-100">
        <button @click="openAbout = !openAbout" class="flex justify-between items-center w-full py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors">
          <span>About Us</span>
          <svg :class="openAbout ? 'rotate-180' : ''" class="w-4 h-4 sm:w-5 sm:h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="openAbout" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="ml-2 sm:ml-3 space-y-1 pb-2">
          <a href="/visimisi" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Vision & Mission</a>
          <a href="/companyoverview" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Company Overview</a>
          <a href="/teamstructure" class="block py-1.5 sm:py-2 px-2 sm:px-3 text-xs sm:text-sm hover:bg-yellow-400 hover:text-white rounded-lg transition-colors">Team Structure</a>
        </div>
      </div>

      <div x-data="{ openProducts: false }" class="border-t border-gray-100">
        <button @click="openProducts = !openProducts" class="flex justify-between items-center w-full py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors">
          <span>Products</span>
          <svg :class="openProducts ? 'rotate-180' : ''" class="w-4 h-4 sm:w-5 sm:h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="openProducts"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="ml-2 sm:ml-3 space-y-1 pb-2">
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
      <a href="{{ route('login') }}" class="py-2 sm:py-2.5 px-2 sm:px-3 hover:bg-yellow-300 hover:text-white rounded-lg transition-colors border-t border-gray-100">Admin</a>
    </nav>
  </div>
</header>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
function carousel() {
  return {
    active: 0,
    open: false,
    autoSlideTimer: null,
    images: ['img/sunwards.jpg', 'img/shacman.jpg', 'img/kuning.jpg', 'img/euro.jpg'],
    init() {
      this.startAutoSlide();
    },
    startAutoSlide() {
      this.autoSlideTimer = setInterval(() => {
        this.active = (this.active + 1) % this.images.length;
      }, 7000);
    },
    stopAutoSlide() {
      if (this.autoSlideTimer) {
        clearInterval(this.autoSlideTimer);
      }
    },
    nextImage() { 
      this.stopAutoSlide();
      this.active = (this.active + 1) % this.images.length;
      this.startAutoSlide();
    },
    prevImage() { 
      this.stopAutoSlide();
      this.active = this.active === 0 ? this.images.length - 1 : this.active - 1;
      this.startAutoSlide();
    }
  }
}
</script>