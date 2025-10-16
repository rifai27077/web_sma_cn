<section class="py-20 px-6 min-h-[600px] bg-[#f7f7f7] overflow-hidden relative" id="prestasi">
  <div class="max-w-7xl mx-auto text-center mb-12">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4 animate-fadeIn">
      Prestasi <span class="text-[#7CB518]">SMA Citra Negara</span>
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-base md:text-lg">
      Inilah deretan prestasi membanggakan siswa-siswi SMA Citra Negara
      sebagai wujud kerja keras, semangat, dan dedikasi dalam berbagai bidang keahlian.
    </p>
  </div>

  <!-- Carousel Container -->
  <div class="relative max-w-[95vw] md:max-w-[90vw] mx-auto">
    <div class="scroll-track flex gap-6 md:gap-10">
      <!-- Loop utama -->
      <div class="scroll-group flex gap-6 md:gap-10">
        @foreach ([
          ['file' => 'p1.jpg', 'judul' => 'Juara 1 Sepak Bola Nasional U16', 'desc' => 'RRI CUP Nasional U16'],
          ['file' => 'p2.jpg', 'judul' => 'Juara 1 Taekwondo Putri', 'desc' => 'Tingkat Nasional Kejuruan ATF U13'],
          ['file' => 'p3.jpg', 'judul' => 'Juara 3 Karate', 'desc' => 'O2SN 2025'],
          ['file' => 'p4.jpg', 'judul' => 'Juara 2 Karate', 'desc' => 'Walikota cup XI'],
          ['file' => 'p5.jpg', 'judul' => 'Juara 1 Basket Putri', 'desc' => 'Haraki Cup 2025 SLTA Se-Jabodetabek'],
          ['file' => 'p6.jpg', 'judul' => 'Juara 2 Hapkido', 'desc' => 'Dearyun Cup Se-JawaBarat']
        ] as $item)
          <div class="flex-shrink-0 w-[75vw] sm:w-[60vw] md:w-[398px] bg-white rounded-2xl shadow-md border border-gray-100 transition-all duration-300">
            <img 
              src="{{ asset('images/' . $item['file']) }}" 
              alt="{{ $item['judul'] }}"
              loading="lazy" decoding="async"
              class="w-full h-[300px] sm:h-[400px] md:h-[497px] object-cover rounded-t-2xl"
            />
            <div class="p-4 md:p-5 text-center">
              <p class="text-base md:text-lg font-semibold text-gray-800">{{ $item['judul'] }}</p>
              <p class="text-xs md:text-sm text-gray-500 mt-1">{{ $item['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Duplikat agar loop tanpa putus -->
      <div class="scroll-group flex gap-6 md:gap-10">
        @foreach ([
          ['file' => 'p1.jpg', 'judul' => 'Juara 1 Sepak Bola Nasional U16', 'desc' => 'RRI CUP Nasional U16'],
          ['file' => 'p2.jpg', 'judul' => 'Juara 1 Taekwondo Putri', 'desc' => 'Tingkat Nasional Kejuruan ATF U13'],
          ['file' => 'p3.jpg', 'judul' => 'Juara 3 Karate', 'desc' => 'O2SN 2025'],
          ['file' => 'p4.jpg', 'judul' => 'Juara 2 Karate', 'desc' => 'Walikota cup XI'],
          ['file' => 'p5.jpg', 'judul' => 'Juara 1 Basket Putri', 'desc' => 'Haraki Cup 2025 SLTA Se-Jabodetabek'],
          ['file' => 'p6.jpg', 'judul' => 'Juara 2 Hapkido', 'desc' => 'Dearyun Cup Se-JawaBarat']
        ] as $item)
          <div class="flex-shrink-0 w-[75vw] sm:w-[60vw] md:w-[398px] bg-white rounded-2xl shadow-md border border-gray-100 transition-all duration-300">
            <img 
              src="{{ asset('images/' . $item['file']) }}" 
              alt="{{ $item['judul'] }}"
              loading="lazy" decoding="async"
              class="w-full h-[300px] sm:h-[400px] md:h-[497px] object-cover rounded-t-2xl"
            />
            <div class="p-4 md:p-5 text-center">
              <p class="text-base md:text-lg font-semibold text-gray-800">{{ $item['judul'] }}</p>
              <p class="text-xs md:text-sm text-gray-500 mt-1">{{ $item['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Scroll Animation -->
  <style>
    @keyframes scroll {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }

    .scroll-track {
      display: flex;
      width: max-content;
      animation: scroll 25s linear infinite;
    }

    .scroll-group {
      display: flex;
    }

    /* Pause animation saat hover (desktop only) */
    @media (hover: hover) {
      .scroll-track:hover {
        animation-play-state: paused;
      }
    }
  </style>
</section>