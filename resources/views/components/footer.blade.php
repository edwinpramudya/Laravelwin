<!-- Footer -->
<footer class="bg-blue-50 border-t mt-8 sm:mt-12">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6 sm:py-8 md:py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
    
    <div class="text-center sm:text-left">
      <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-yellow-400 mb-2">Hayyu Pratama Dealer</h1>
      <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed">
        Official distributor of heavy equipment such as Sunward, Shacman and UD Trucks.
      </p>
    </div>

    <div class="text-center sm:text-left">
      <h4 class="text-base sm:text-lg font-semibold text-gray-800 mb-2 sm:mb-3">Menu</h4>
      <ul class="space-y-1.5 sm:space-y-2 text-gray-600 text-sm sm:text-base">
        <li><a href="/" class="hover:text-blue-600 transition inline-block">Home</a></li>
        <li><a href="/companyoverview" class="hover:text-blue-600 transition inline-block">About Us</a></li>
        <li><a href="{{ route('products.index') }}" class="hover:text-blue-600 transition inline-block">Products</a></li>
        <li><a href="/news" class="hover:text-blue-600 transition inline-block">News</a></li>
        <li><a href="/career" class="hover:text-blue-600 transition inline-block">Career</a></li>
      </ul>
    </div>

    <div class="text-center sm:text-left">
      <h4 class="text-base sm:text-lg font-semibold text-gray-800 mb-2 sm:mb-3">Contact & Social Media</h4>
      <ul class="space-y-1.5 sm:space-y-2 text-gray-600 text-xs sm:text-sm md:text-base">
        <li class="flex items-start justify-center sm:justify-start">
          <span class="mr-2">📍</span>
          <span>{{ $kont->alamat }}</span>
        </li>
        <li class="flex items-center justify-center sm:justify-start">
          <span class="mr-2">✉️</span>
          <span class="break-all">{{ $kont->email }}</span>
        </li>
        <li class="flex items-center justify-center sm:justify-start">
          <span class="mr-2">📞</span>
          <span>{{ $kont->no_hp }}</span>
        </li>
      </ul>

      <div class="flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-2 sm:gap-3 mt-3 sm:mt-4">
        <p class="font-semibold text-gray-700 text-sm sm:text-base">Follow Us:</p>
        <div class="flex items-center space-x-3">
          <a href="https://www.facebook.com/hayyupratamadealer" 
             class="hover:scale-110 transition" 
             target="_blank" 
             rel="noopener noreferrer">
            <img src="{{ asset('img/fb.png') }}" alt="Facebook" class="w-6 h-6 sm:w-7 sm:h-7">
          </a>
          <a href="https://www.instagram.com/hayyupratamadealer?utm_source=ig_web_button_share_sheet&igsh=cTBveTVrMG5nY3Np" 
             class="hover:scale-110 transition" 
             target="_blank" 
             rel="noopener noreferrer">
            <img src="{{ asset('img/ig.png') }}" alt="Instagram" class="w-6 h-6 sm:w-7 sm:h-7">
          </a>
          <a href="https://www.linkedin.com/company/hayyu-pratama-dealer/?viewAsMember=true" 
             class="hover:scale-110 transition" 
             target="_blank" 
             rel="noopener noreferrer">
            <img src="{{ asset('img/in.png') }}" alt="LinkedIn" class="w-6 h-6 sm:w-7 sm:h-7">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center text-gray-500 text-xs sm:text-sm py-3 sm:py-4 border-t border-gray-200">
    © 2025 All Rights Reserved.
  </div>
</footer>