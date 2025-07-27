<nav class="bg-sgray border-gray-200 shadow-lg backdrop-blur-sm sticky top-0 z-50 transition-all duration-300" role="navigation">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse group">
      <div class="w-10 h-10 bg-gradient-to-br from-active to-active2 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-all duration-300 group-hover:scale-105">
        <span class="text-coffe font-bold text-lg">M</span>
      </div>
      <span class="self-center text-2xl font-bold whitespace-nowrap text-coffe group-hover:text-active transition-colors duration-300 tracking-tight">
        Mywebsite
      </span>
    </a>

    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse items-center">
      <button type="button" class="text-coffe bg-active hover:bg-active2 focus:ring-4 focus:outline-none focus:ring-bradius font-semibold rounded-lg text-sm px-6 py-2.5 text-center dark:bg-active dark:hover:bg-active2 dark:focus:ring-bradius transform hover:scale-105 transition-all duration-200 shadow-md hover:shadow-lg">
        <span class="flex items-center space-x-2">
          <span>Get started</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </span>
      </button>

      <button id="menu-toggle" type="button" class="inline-flex items-center p-2.5 w-11 h-11 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition-all duration-200 hover:scale-105" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5 hamburger-icon" aria-hidden="true" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
        <svg class="w-5 h-5 close-icon hidden" aria-hidden="true" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 transition-all duration-300" id="navbar-cta">
      <ul class="flex flex-col md:flex-row font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-sgray md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-sgray shadow-lg md:shadow-none">
        @php
          $menuItems = [
            ['label' => 'Home', 'url' => '/', 'slug' => '/'],
            ['label' => 'About', 'url' => '/about', 'slug' => 'about'],
            ['label' => 'Services', 'url' => '/services', 'slug' => 'services'],
            ['label' => 'Contact', 'url' => '/contact', 'slug' => 'contact'],
          ];
        @endphp

        @foreach ($menuItems as $item)
          @php
            $isActive = request()->is($item['slug']);
          @endphp
          <li class="relative">
            <a href="{{ url($item['url']) }}"
              class="block py-3 px-4 md:py-2 md:px-4 rounded-lg font-medium transition-all duration-300 relative overflow-hidden group {{ $isActive ? 'text-active bg-active2 md:bg-active/10 md:text-active shadow-sm' : 'text-gray-900 hover:bg-active2 md:hover:bg-active/5 md:hover:text-active dark:text-coffe dark:hover:text-coffe hover:shadow-sm' }}"
              @if ($isActive) aria-current="page" @endif>
              <span class="relative z-10">{{ $item['label'] }}</span>
              <div class="absolute inset-0 bg-gradient-to-r from-active/0 via-active/5 to-active/0 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
