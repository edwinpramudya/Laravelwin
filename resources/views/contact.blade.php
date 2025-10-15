@extends('layouts.utama2')

@section('title', 'Contact')

@section('content')

<section class="px-3 sm:px-6 py-6 sm:py-8 md:py-12 max-w-7xl mx-auto">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 md:gap-12">
    
    @foreach ($kont as $item)
    <div>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-3 sm:mb-4">Customer Service</h2>
      <div class="space-y-2 mb-4 sm:mb-6">
        <p class="text-sm sm:text-base"><strong>Head Office:</strong> {{ $item->alamat }}</p>
        <p class="text-sm sm:text-base"><strong>Phone:</strong> {{ $item->no_hp }}</p>
        <p class="text-sm sm:text-base"><strong>Email:</strong> {{ $item->email }}</p>
      </div>
      @endforeach

      <div class="w-full h-64 sm:h-80 md:h-96 rounded-lg overflow-hidden shadow-md">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.382266894927!2d117.145257!3d-0.456123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67234567890ab%3A0x1234567890abcdef!2sJl.%20A.%20Wahab%20Syahranie%20No.2%2C%20Samarinda!5e0!3m2!1sen!2sid!4v1698756789012!5m2!1sen!2sid" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          class="w-full h-full">
        </iframe>
      </div>
    </div>

    <div>
      <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-3 sm:mb-4">Contact Us</h2>
      <p class="text-gray-600 text-sm sm:text-base mb-4 sm:mb-6">Don't hesitate to contact us to get information about your question</p>
      
      <form class="space-y-3 sm:space-y-4">
        <div>
          <label class="block text-xs sm:text-sm font-medium mb-1">Subjek</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
          <div>
            <label class="block text-xs sm:text-sm font-medium mb-1">Name</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium mb-1">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
          </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
          <div>
            <label class="block text-xs sm:text-sm font-medium mb-1">Phone</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium mb-1">City</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
          </div>
        </div>
        
        <div>
          <label class="block text-xs sm:text-sm font-medium mb-1">Address</label>
          <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300">
        </div>
        
        <div>
          <label class="block text-xs sm:text-sm font-medium mb-1">Message</label>
          <textarea class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 sm:h-28 text-sm sm:text-base focus:outline-none focus:ring-2 focus:ring-yellow-300 resize-none"></textarea>
        </div>
        
        <button type="submit" class="border-2 border-yellow-300 w-full bg-yellow-300 hover:bg-white hover:text-black hover:border-black transition duration-300 text-white font-semibold py-2.5 sm:py-3 text-sm sm:text-base rounded-full sm:rounded-2xl">
          Send
        </button>
      </form>
    </div>
  </div>
</section>

@endsection