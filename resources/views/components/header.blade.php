<header
  x-data="{ open:false, scrolled:false }"
  x-init="
    $watch('open', val => val ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden'));
    scrolled = window.scrollY > 10;
    window.addEventListener('scroll', () => scrolled = window.scrollY > 10);
  "
  @keydown.escape.window="open = false"
  class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white backdrop-blur-md"
  :class="scrolled ? 'bg-white/90 backdrop-blur-md shadow-md' : 'bg-transparent'"
>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-3 shrink-0">
        <img
          src="{{ asset('images/logo-cn.png') }}"
          alt="Citra Negara"
          class="w-10 h-10 object-contain transition-transform duration-300"
          :class="scrolled ? 'scale-90' : 'scale-100'"
        />
        <div class="hidden sm:flex flex-col leading-tight">
          <span class="font-extrabold text-[#699D15] text-sm lg:text-base">Citra Negara</span>
          <span class="text-xs text-gray-500 -mt-0.5">MANTAP</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex items-center gap-2 lg:gap-4 flex-1 justify-center" aria-label="Main navigation">
        @php
          $menus = [
            '/' => 'Beranda',
            'akademik' => 'Akademik',
            'berita' => 'Berita',
            'kontak' => 'Kontak',
            'kolaborasi' => 'Kolaborasi',
          ];
        @endphp

        <ul class="flex items-center gap-2 lg:gap-6">
          @foreach ($menus as $route => $label)
            @if ($route === 'akademik')
              {{-- Akademik dropdown --}}
              <li x-data="{ openDrop:false }" class="relative">
                <button
                  @click="openDrop = !openDrop"
                  @keydown.enter.stop.prevent="openDrop = !openDrop"
                  @keydown.arrow-down.prevent="$refs.akademikFirst && $refs.akademikFirst.focus()"
                  @keydown.escape.stop="openDrop = false"
                  class="group px-4 py-2 rounded-full transition flex items-center gap-2 font-semibold text-sm
                         {{ Request::is('akademik*') ? 'bg-[#699D15] text-white' : 'text-gray-800 hover:text-[#699D15] hover:bg-lime-50' }}"
                  aria-haspopup="true"
                  :aria-expanded="openDrop.toString()"
                >
                  <span>{{ $label }}</span>
                  <svg class="w-4 h-4 transition-transform" :class="openDrop ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"/>
                  </svg>
                </button>

                {{-- Dropdown panel --}}
                <div
                  x-show="openDrop"
                  x-cloak
                  @click.away="openDrop = false"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 translate-y-1"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 -translate-y-1"
                  class="absolute left-0 mt-3 w-56 bg-white rounded-xl shadow-lg ring-1 ring-black/5 overflow-hidden"
                  role="menu"
                >
                  <a href="/akademik/kurikulum" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50" x-ref="akademikFirst" role="menuitem">Kurikulum & Jadwal</a>
                  <a href="/akademik/guru" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50" role="menuitem">Tenaga Pendidik</a>
                  <a href="/akademik/akademik-info" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50" role="menuitem">Informasi Akademik</a>
                </div>
              </li>
            @else
              <li>
                <a href="{{ $route == '/' ? '/' : '/' . $route }}"
                   class="group relative px-4 py-2 rounded-full transition duration-200 font-semibold text-sm
                          {{ Request::is($route == '/' ? '/' : $route.'*') ? 'bg-[#699D15] text-white' : 'text-gray-800 hover:text-[#699D15] hover:bg-lime-50' }}">
                  <span>{{ $label }}</span>
                  <span class="absolute left-1/2 -translate-x-1/2 bottom-1 block h-[2px] w-0 bg-[#699D15] group-hover:w-8 transition-all duration-300"></span>
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </nav>

      <!-- Right: only hamburger for mobile -->
      <div class="flex items-center gap-3">
        <!-- Mobile hamburger -->
        <button
          @click="open = !open; $nextTick(() => { if(open) { $refs.mobileFirst && $refs.mobileFirst.focus() } })"
          aria-label="Toggle menu"
          :aria-expanded="open.toString()"
          class="md:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#699D15] bg-white/20 hover:bg-white/30"
        >
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu (slide down) -->
  <div
    id="mobile-menu"
    x-show="open"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-250"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-3"
    class="md:hidden"
    role="dialog" aria-modal="true" aria-label="Mobile menu"
  >
    <div class="bg-white/95 backdrop-blur-sm shadow-lg border-t border-gray-100 px-4 py-5">
      <div class="flex flex-col gap-2">
        @foreach ($menus as $route => $label)
          <a
            href="{{ $route == '/' ? '/' : '/' . rtrim($route, '*') }}"
            @if ($loop->first) x-ref="mobileFirst" @endif
            @click="open = false"
            class="block rounded-lg px-4 py-3 text-gray-800 hover:bg-gray-50 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#699D15]"
          >
            {{ $label }}
          </a>
        @endforeach

        {{-- removed CTA "Daftar Sekarang" per request --}}
      </div>
    </div>
  </div>
</header>