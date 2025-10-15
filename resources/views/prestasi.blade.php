@extends('layouts.app')

@section('title', 'Prestasi SMK Citra Negara')

@section('content')
<section class="py-20 px-6 bg-gradient-to-b from-gray-50 to-white min-h-screen relative overflow-hidden">
  <!-- Header -->
  <div class="max-w-7xl mx-auto text-center mb-16">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4 animate-fadeIn">
      Prestasi <span class="text-[#7CB518]">SMK Citra Negara</span>
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg animate-fadeIn delay-200">
      Kumpulan prestasi terbaik yang diraih oleh siswa dan siswi kami di tingkat sekolah, kota, provinsi, hingga nasional.
    </p>
  </div>

  <!-- Grid Prestasi -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
    @foreach ([
      ['file' => 'p1.png', 'judul' => 'Juara 1 Tim futsal', 'desc' => 'PESOET CUP Sejabodetabek 2025'],
      ['file' => 'p2.png', 'judul' => 'Juara 1 Taekwondo putra', 'desc' => 'Tingkat Nasional'],
      ['file' => 'p3.png', 'judul' => 'Juara Utama 2', 'desc' => 'PBB, LKBB & Kostum Catabrasta Se-Pulau Jawa'],
      ['file' => 'p4.jpg', 'judul' => 'Juara 1 Pencak Silat', 'desc' => 'Tingkat Nasional'],
      ['file' => 'p5.jpg', 'judul' => 'Juara 1 Basket Putri', 'desc' => 'Haraki Cup 2025 SLTA Se-Jabodetabek'],
      ['file' => 'p6.jpg', 'judul' => 'Juara 1 Tim Futsal', 'desc' => 'Futsal Primer Student League']
    ] as $item)
    <div class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 transition-all duration-300">
      <!-- Gambar -->
      <img 
        src="{{ asset('images/' . $item['file']) }}" 
        alt="{{ $item['judul'] }}" 
        loading="lazy" decoding="async"
        class="w-full h-[400px] object-cover"
      />

      <!-- Caption -->
      <div class="p-6 text-center">
        <h4 class="text-lg font-semibold text-gray-800">{{ $item['judul'] }}</h4>
        <p class="text-sm text-gray-500 mt-1">{{ $item['desc'] }}</p>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Efek Latar -->
  <div class="absolute top-0 left-0 w-96 h-96 bg-[#7CB518]/10 rounded-full blur-3xl -z-10"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#14104E]/10 rounded-full blur-3xl -z-10"></div>
</section>

<!-- Animasi Halus Header -->
<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeIn {
    animation: fadeIn 1s ease forwards;
  }
  .delay-200 {
    animation-delay: 0.2s;
  }
</style>
@endsection
