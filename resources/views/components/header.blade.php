<header
  x-data="{ open:false, scrolled:false, dropdown:null }"
  x-init="
    const onScroll = () => scrolled = window.scrollY > 10;
    window.addEventListener('scroll', onScroll);
    onScroll();
  "
  @keydown.escape.window="open = false; dropdown = null"
  class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-out"
  :class="scrolled ? 'bg-white/90 backdrop-blur-md shadow-sm' : 'bg-transparent'"
>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="/" class="flex gap-3 shrink-0">
        <img
          src="{{ asset('images/logo-cn.png') }}"
          alt="SMK Citra Negara"
          class="w-11 h-11 object-contain transition-transform duration-300 hover:scale-105"
        />
        <div class="hidden sm:flex flex-col leading-tight">
          <span class="font-extrabold text-[#699D15] text-sm lg:text-base">
            SMK Citra Negara
          </span>
          <span class="text-xs text-gray-600">MANTAP</span>
        </div>
      </a>

      <div class="flex items-center gap-10">
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-800">

          <div class="relative" @mouseenter="dropdown = 'profil'" @mouseleave="dropdown = null">
            <button class="flex items-center gap-1 hover:text-[#699D15] transition-colors duration-300">
              Profil
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div
              x-show="dropdown === 'profil'"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 -translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 -translate-y-2"
              class="absolute left-0 mt-2 w-52 bg-white shadow-lg/30 shadow-md rounded-xl border border-gray-100 py-2 z-40"
            >
              <a href="/yayasan" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Yayasan</a>
              <a href="/sekolah" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Sekolah</a>
              <a href="#visi-misi" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Visi & Misi</a>
            </div>
          </div>

          <div class="relative" @mouseenter="dropdown = 'akademik'" @mouseleave="dropdown = null">
            <button class="flex items-center gap-1 hover:text-[#699D15] transition-colors duration-300">
              Akademik
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div
              x-show="dropdown === 'akademik'"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 -translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 -translate-y-2"
              class="absolute left-0 mt-2 w-52 bg-white shadow-lg/30 shadow-md rounded-xl border border-gray-100 py-2 z-40"
            >
              <a href="#jurusan" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Jurusan</a>
              <a href="#ekstrakurikuler" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Ekstrakurikuler</a>
              <a href="/achievements" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Prestasi</a>
            </div>
          </div>

          <div class="relative" @mouseenter="dropdown = 'direktori'" @mouseleave="dropdown = null">
            <button class="flex items-center gap-1 hover:text-[#699D15] transition-colors duration-300">
              Direktori
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div
              x-show="dropdown === 'direktori'"
              x-transition
              class="absolute left-0 mt-2 w-52 bg-white shadow-lg/30 shadow-md rounded-xl border border-gray-100 py-2 z-40"
            >
              <a href="/teachers" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Guru</a>
              <a href="/staff" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Staf</a>
            </div>
          </div>

          <!-- <div class="relative" @mouseenter="dropdown = 'galeri'" @mouseleave="dropdown = null">
            <button class="flex items-center gap-1 hover:text-[#699D15] transition-colors duration-300">
              Galeri
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div
              x-show="dropdown === 'galeri'"
              x-transition
              class="absolute left-0 mt-2 w-52 bg-white shadow-lg/30 shadow-md rounded-xl border border-gray-100 py-2 z-40"
            >
              <a href="#school-video" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Video Sekolah</a>
              <a href="#school-photo" class="block px-4 py-2.5 hover:bg-gray-50 hover:text-[#699D15] transition">Foto Sekolah</a>
            </div>
          </div> -->

          <!-- KONTAK -->
          <a href="/berita" class="hover:text-[#699D15] transition-colors duration-300">Berita</a>
          <a href="/contact" class="hover:text-[#699D15] transition-colors duration-300">Kontak</a>
        </nav>

        <!-- CTA + Hamburger -->
        <div class="flex items-center gap-4">
          <a href="/pendaftaran"
            class="hidden md:inline-block bg-[#699D15] text-white font-semibold px-6 py-2.5 rounded-full 
                   shadow-md hover:shadow-lg hover:bg-[#7FBF1D] active:scale-95 transition-all duration-300 text-sm">
            DAFTAR PPDB
          </a>

          <!-- Mobile Button -->
          <button
            @click="open = !open"
            aria-label="Toggle menu"
            :aria-expanded="open.toString()"
            class="md:hidden p-2 rounded-md bg-white/30 hover:bg-white/40 transition"
          >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div
    x-show="open"
    x-cloak
    x-transition
    class="md:hidden bg-white/95 backdrop-blur-sm shadow-lg border-t border-gray-100 px-6 py-5"
  >
    <nav class="flex flex-col gap-2 text-gray-800 font-medium">
      <a href="/yayasan" class="py-2">Yayasan</a>
      <a href="/school" class="py-2">Sekolah</a>
      <a href="/visi-misi" class="py-2">Visi & Misi</a>
      <a href="#jurusan" class="py-2">Jurusan</a>
      <a href="#ekstrakurikuler" class="py-2">Ekstrakurikuler</a>
      <a href="/achievements" class="py-2">Prestasi</a>
      <a href="/teachers" class="py-2">Guru</a>
      <a href="/staff" class="py-2">Staf</a>
      <a href="/school-video" class="py-2">Video Sekolah</a>
      <a href="/school-photo" class="py-2">Foto Sekolah</a>
      <a href="/contact" class="py-2">Kontak</a>
      <a href="/berita" class="py-2">Berita</a>
      <a href="/pendaftaran"
        class="mt-3 text-center bg-[#699D15] text-white font-semibold px-5 py-2 rounded-full shadow-md hover:bg-[#7FBF1D] hover:shadow-lg transition-all duration-300">
        DAFTAR PPDB
      </a>
    </nav>
  </div>
</header>
