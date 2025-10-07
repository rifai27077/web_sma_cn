
@extends('layouts.app')


@section('content')

<section 
  class="relative h-[80vh] w-full flex items-center justify-center bg-[url('/images/hero-fallback.jpg')] bg-cover bg-center"
>  <div class="absolute inset-0 w-full h-full z-0">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-black/60"></div>
    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover">
      <source src="/videos/smk.MOV" type="video/mp4" />
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 flex flex-col items-center justify-center min-h-[400px]" style="min-height:400px;">
    <div class="w-full md:w-2/3 mx-auto text-center" data-aos="zoom-in" data-aos-delay="50">
      <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
        Selamat Datang di <span class="bg-white text-[#7CB518] px-2 rounded">SMK Citra Negara</span>
      </h1>
      <p class="text-white text-lg mb-6">
        Mencetak generasi yang terampil, berkarakter, dan siap bersaing di dunia kerja serta melanjutkan pendidikan ke jenjang yang lebih tinggi.
      </p>
    </div>
  </div>
</section>

<section class="py-20 px-6 bg-white" data-aos="fade-up" data-aos-duration="1000">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center justify-center">
    <div class="flex gap-6 items-center md:items-stretch" data-aos="fade-right" data-aos-delay="200">
      <div class="mt-4 grid justify-start">
        <img src="/images/u-smk2.png" alt="Lapangan SMK" class="w-64 h-64 object-cover rounded-2xl shadow" />
        <div class="bg-[#7CB518] rounded-xl px-10 py-7 flex flex-col items-center shadow mt-4" data-aos="zoom-in" data-aos-delay="200">
          <span class="text-4xl md:text-5xl font-bold text-white leading-none">20</span>
          <span class="text-white text-lg font-medium mt-1">Years Of Experience</span>
        </div>
      </div>
      <div class="flex mt-4" data-aos="fade-left" data-aos-delay="250">
        <img src="/images/kp-smk.jpg" alt="Kepala Sekolah" class="w-full h-80 object-cover rounded-2xl shadow" />
      </div>
    </div>

    <div class="pt-6 md:pt-0" data-aos="fade-up" data-aos-delay="200">
      <div class="mb-2 text-[#222] text-sm font-semibold tracking-wide uppercase flex items-center gap-2">
        <span>Sambutan Kepala Sekolah</span>
        <span class="block w-12 h-0.5 bg-[#222] rounded"></span>
      </div>
      <h2 class="text-2xl md:text-3xl font-extrabold text-[#111] mb-3">Abdul Kodir Zaelani, S.Pd.I.</h2>
      <div class="text-[#444] text-sm md:text-base leading-relaxed space-y-3">
        <p>Assalamu’alaikum warahmatullahi wabarakatuh,</p>
        <p>Saya Abdul Kodir Zaelani, S.Pd.I. selaku kepala sekolah SMK Citra Negara...</p>
      </div>
    </div>
  </div>
</section>

<!-- Visi Misi Section -->
<section class="py-20 px-6 bg-[#699D15]" data-aos="fade-up" data-aos-duration="1000">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8">
    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition flex flex-col h-full" data-aos="fade-right">
      <div class="flex items-center mb-6">
        <span class="flex items-center justify-center bg-[#699D15] rounded-full h-14 w-14 mr-4">
          <img src="/images/sparkles.png" class="h-8 w-8">
        </span>
        <span class="text-2xl md:text-3xl font-extrabold text-[#699D15] uppercase tracking-wide text-left">VISI</span>
      </div>
      <p class="text-gray-700 text-left text-base md:text-lg">
        Terwujudnya Sekolah yang Religius, Disiplin dan Terampil Dalam Menyongsong Generasi Emas di tahun 2045
      </p>
    </div>
    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition flex flex-col h-full" data-aos="fade-left" data-aos-delay="150">
      <div class="flex items-center mb-6">
        <span class="flex items-center justify-center bg-[#E9DC00] rounded-full h-14 w-14 mr-4">
          <img src="/images/vector.png" class="h-8 w-8">
        </span>
        <span class="text-2xl md:text-3xl font-extrabold text-[#E9DC00] uppercase tracking-wide text-left">MISI</span>
      </div>
      <p class="text-gray-700 text-left text-base md:text-lg">
        Mewujudkan insan yang taat beribadah...
      </p>
    </div>
  </div>
</section>

<!-- Bidang Studi Kami Section -->
<section class="pt-20 px-6 bg-gradient-to-b from-white to-green-50">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-5xl font-extrabold text-[#7CB518] mb-10" data-aos="fade-down">
      Bidang Studi Kami
    </h2>

    <!-- Kategori Bidang -->
    <div class="flex flex-wrap justify-center gap-3 md:gap-5 mb-14" data-aos="fade-up" data-aos-delay="200">
      <span class="bg-[#FFE8A3] text-gray-800 font-semibold px-6 py-2 rounded-full text-base shadow-sm">Pemasaran</span>
      <span class="bg-[#900B09] text-white font-semibold px-6 py-2 rounded-full text-base shadow-sm">DKV</span>
      <span class="bg-[#E8B931] text-gray-800 font-semibold px-6 py-2 rounded-full text-base shadow-sm">MPLB</span>
      <span class="bg-[#A3DE83] text-gray-800 font-semibold px-6 py-2 rounded-full text-base shadow-sm">Perhotelan</span>
      <span class="bg-[#14104E] text-white font-semibold px-6 py-2 rounded-full text-base shadow-sm">PPLG</span>
      <span class="bg-[#6EC6FF] text-gray-800 font-semibold px-6 py-2 rounded-full text-base shadow-sm">TJKT</span>
    </div>

    <!-- Gambar siswa -->
    <div class="relative flex justify-center" data-aos="zoom-in" data-aos-delay="400">
      <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-6 w-72 h-72 bg-[#7CB518]/10 rounded-full blur-3xl"></div>
      <img src="/images/allmodel.png" alt="Bidang Studi Siswa"
        class="relative z-10 w-full max-w-5xl object-contain drop-shadow-2xl" />
	</div>
  </div>
</section>


<!-- Pilihan Jurusan Section -->
<section class="py-20 px-6 bg-gradient-to-b from-white via-green-50 to-white">
  <div class="max-w-6xl mx-auto text-center">
    <h3 class="text-3xl md:text-5xl font-extrabold text-[#7CB518] mb-4" data-aos="fade-down">
      Pilihan Jurusan Unggulan <br />
      <span class="text-[#14104E]">SMK Citra Negara</span>
    </h3>
    <p class="text-gray-600 max-w-3xl mx-auto mb-16 text-base md:text-lg" data-aos="fade-up" data-aos-delay="150">
      Kami menghadirkan enam jurusan yang dirancang untuk membangun kompetensi dan karakter sesuai minat serta kebutuhan industri masa kini.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Card Template -->
      @php
        $jurusan = [
          ['nama'=>'MPLB','warna'=>'from-[#E8B931] to-yellow-100','img'=>'/images/m-mplb.png','desk'=>'Mengembangkan kemampuan administrasi, komunikasi bisnis, dan layanan perkantoran digital.','text'=>'text-yellow-700','border'=>'border-[#FFD600]'],
          ['nama'=>'DKV','warna'=>'from-[#900B09] to-pink-300','img'=>'/images/m-dkv.png','desk'=>'Belajar desain visual, ilustrasi, fotografi, hingga branding digital kreatif.','text'=>'text-white','border'=>'border-[#FF6B6B]'],
          ['nama'=>'PPLG','warna'=>'from-[#14104E] to-blue-300','img'=>'/images/m-pplg.png','desk'=>'Menciptakan perangkat lunak, website, dan game dengan teknologi modern.','text'=>'text-white','border'=>'border-[#7B6CF6]'],
          ['nama'=>'TJKT','warna'=>'from-blue-400 to-blue-100','img'=>'/images/m-tkj.png','desk'=>'Menguasai jaringan komputer, sistem server, dan infrastruktur IT profesional.','text'=>'text-blue-900','border'=>'border-[#6EC6FF]'],
          ['nama'=>'PM','warna'=>'from-[#FFB84C] to-[#FFD580]','img'=>'/images/m-pm.png','desk'=>'Belajar strategi pemasaran digital, wirausaha, dan layanan pelanggan.','text'=>'text-[#E26A00]','border'=>'border-[#E26A00]'],
          ['nama'=>'PH','warna'=>'from-green-200 to-gray-100','img'=>'/images/m-ph.png','desk'=>'Mengasah keahlian di bidang perhotelan, pelayanan tamu, dan tata boga.','text'=>'text-green-800','border'=>'border-green-700']
        ];
      @endphp

	  @php
		$jurusan = [
			['nama'=>'MPLB','warna'=>'from-[#E8B931] to-yellow-100','img'=>'/images/m-mplb.png','desk'=>'Mengembangkan kemampuan administrasi, komunikasi bisnis, dan layanan perkantoran digital.','text'=>'text-yellow-700','border'=>'border-[#FFD600]', 'link'=>'mplb'],
			['nama'=>'DKV','warna'=>'from-[#900B09] to-pink-300','img'=>'/images/m-dkv.png','desk'=>'Belajar desain visual, ilustrasi, fotografi, hingga branding digital kreatif.','text'=>'text-white','border'=>'border-[#FF6B6B]', 'link'=>'dkv'],
			['nama'=>'PPLG','warna'=>'from-[#14104E] to-blue-300','img'=>'/images/m-pplg.png','desk'=>'Menciptakan perangkat lunak, website, dan game dengan teknologi modern.','text'=>'text-white','border'=>'border-[#7B6CF6]', 'link'=>'pplg'],
			['nama'=>'TJKT','warna'=>'from-blue-400 to-blue-100','img'=>'/images/m-tkj.png','desk'=>'Menguasai jaringan komputer, sistem server, dan infrastruktur IT profesional.','text'=>'text-blue-900','border'=>'border-[#6EC6FF]', 'link'=>'tjkt'],
			['nama'=>'PM','warna'=>'from-[#FFB84C] to-[#FFD580]','img'=>'/images/m-pm.png','desk'=>'Belajar strategi pemasaran digital, wirausaha, dan layanan pelanggan.','text'=>'text-[#E26A00]','border'=>'border-[#E26A00]', 'link'=>'pm'],
			['nama'=>'PH','warna'=>'from-green-200 to-gray-100','img'=>'/images/m-ph.png','desk'=>'Mengasah keahlian di bidang perhotelan, pelayanan tamu, dan tata boga.','text'=>'text-green-800','border'=>'border-green-700', 'link'=>'ph']
		];
		@endphp

      @foreach ($jurusan as $index => $j)
      <div 
        class="relative group rounded-2xl bg-gradient-to-br {{ $j['warna'] }} p-8 flex flex-col items-center shadow-xl transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl hover:scale-[1.03]"
        data-aos="fade-up"
        data-aos-delay="{{ 100 + ($index * 100) }}">
        
        <!-- Glow effect -->
        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-white/10 rounded-2xl blur-lg"></div>
        
        <!-- Gambar jurusan -->
		<div class="relative z-10 w-40 h-40 mb-6 flex items-center justify-center">
			<img 
				src="{{ $j['img'] }}" 
				alt="{{ $j['nama'] }}" 
				class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-110 drop-shadow-lg"
			/>
		</div>

        <h4 class="relative z-10 font-extrabold text-xl {{ $j['text'] }} mb-2">{{ $j['nama'] }}</h4>
        <p class="relative z-10 text-sm md:text-base text-center text-black/80 mb-4">{{ $j['desk'] }}</p>
        
       <a href="{{ url('/jurusan/' . strtolower($j['link'])) }}" 
		class="relative z-10 inline-flex items-center px-5 py-2 bg-white {{ $j['border'] }} border text-sm font-semibold rounded-full transition-all duration-300 hover:text-white hover:bg-[#7CB518]">
		Ketahui lebih lanjut <span class="ml-2">→</span>
		</a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Prestasi Section -->
<section class="py-20 px-6 bg-white">
	<h3 class="text-xl md:text-2xl font-bold text-center mb-8">Jejak prestasi yang <span class="bg-[#7CB518] text-white px-2 rounded">membanggakan</span></h3>
	<div class="flex flex-wrap justify-center gap-6">
		<img src="/images/prestasi-1.jpg" alt="Juara 1" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-2.jpg" alt="Juara Nasional" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-3.jpg" alt="Juara Utama 2" class="w-72 rounded-xl shadow border border-gray-100" />
	</div>
</section>

<section class="py-20 px-6 bg-white">
  <div class="max-w-7xl mx-auto text-center mb-14">
    <h2 class="text-2xl md:text-3xl font-extrabold text-[#7CB518]">
      Asah kemampuanmu melalui ekskul-eskul
    </h2>
    <p class="text-[#E9DC00] text-xl font-semibold">berkelas Citra Negara</p>
  </div>

  @php
    $ekskul = [
      ['nama'=>'CITTER','deskripsi'=>'Citra Negara Theater','img'=>'/images/citter.png','wa'=>'#','ig'=>'#','posisi'=>'left'],
      ['nama'=>'Futsal','deskripsi'=>'Ekstrakurikuler Futsal','img'=>'/images/futsal.png','wa'=>'#','ig'=>'#','posisi'=>'right'],
      ['nama'=>'Paskibra','deskripsi'=>'Baswara','img'=>'/images/paskibra.png','wa'=>'#','ig'=>'#','posisi'=>'left'],
      ['nama'=>'Cinar','deskripsi'=>'Seni Tari Citra Negara','img'=>'/images/cinar.png','wa'=>'#','ig'=>'#','posisi'=>'right'],
    ];
  @endphp

  <div class="max-w-6xl mx-auto grid gap-14">
    @foreach ($ekskul as $e)
      {{-- tiap card --}}
      <article
        class="group relative bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2 items-center gap-6 p-6 transition-transform duration-400 hover:-translate-y-2"
        data-aos="fade-up"
        data-aos-delay="{{ 80 * ($loop->index + 1) }}"
      >
        {{-- image + overlay button --}}
        <div class="{{ $e['posisi'] === 'left' ? 'order-1' : 'order-2' }} relative">
          <div class="relative overflow-hidden rounded-xl shadow-md">
            <img
              src="{{ $e['img'] }}"
              alt="{{ $e['nama'] }} - ekskul"
              loading="lazy"
              class="w-full h-56 md:h-48 object-cover transition-transform duration-500 group-hover:scale-105"
            />

            {{-- gradient glow --}}
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/35 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
        </div>

        {{-- content --}}
        <div class="{{ $e['posisi'] === 'left' ? 'order-2' : 'order-1' }} pr-2">
          <h3 class="text-lg font-extrabold text-[#111] mb-2">{{ $e['nama'] }}</h3>
          <p class="text-gray-600 mb-4">{{ $e['deskripsi'] }}</p>

          <div class="flex items-center gap-3">
            {{-- Instagram (SVG inline, currentColor) --}}
            <a href="{{ $e['ig'] }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-tr from-pink-100 to-pink-50 border border-pink-200 text-pink-600 hover:scale-110 transition-transform focus:outline-none focus:ring-2 focus:ring-pink-300"
               aria-label="Instagram {{ $e['nama'] }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zM4.5 7.75A3.25 3.25 0 0 1 7.75 4.5h8.5A3.25 3.25 0 0 1 19.5 7.75v8.5a3.25 3.25 0 0 1-3.25 3.25h-8.5A3.25 3.25 0 0 1 4.5 16.25v-8.5zm7.25 1a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 2a2.75 2.75 0 1 1 0 5.5 2.75 2.75 0 0 1 0-5.5zm5-2.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
              </svg>
            </a>

            {{-- WhatsApp --}}
            <a href="{{ $e['wa'] }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-tr from-green-100 to-green-50 border border-green-200 text-green-600 hover:scale-110 transition-transform focus:outline-none focus:ring-2 focus:ring-green-300"
               aria-label="WhatsApp {{ $e['nama'] }}">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 2a9.93 9.93 0 0 0-7.07 2.93A9.93 9.93 0 0 0 2 12a9.93 9.93 0 0 0 2.93 7.07A9.93 9.93 0 0 0 12 22a9.93 9.93 0 0 0 7.07-2.93A9.93 9.93 0 0 0 22 12a9.93 9.93 0 0 0-2.93-7.07A9.93 9.93 0 0 0 12 2zm0 18a8 8 0 0 1-4.21-1.19l-.3-.18-2.86.75.77-2.8-.2-.31A7.97 7.97 0 1 1 12 20zm3.84-5.06c-.21-.11-1.23-.61-1.42-.68s-.33-.1-.47.1-.54.68-.67.82-.25.15-.46.05a6.53 6.53 0 0 1-1.93-1.19 7.12 7.12 0 0 1-1.31-1.63c-.14-.25 0-.39.1-.53.1-.12.25-.32.37-.48s.16-.25.25-.41.05-.31-.03-.44c-.08-.11-.47-1.13-.65-1.55s-.35-.36-.48-.37h-.41a.79.79 0 0 0-.57.27 2.37 2.37 0 0 0-.74 1.77 4.18 4.18 0 0 0 .87 2.26 9.45 9.45 0 0 0 3.65 3.16c.51.22.9.34 1.2.43a2.87 2.87 0 0 0 1.32.08 2.22 2.22 0 0 0 1.45-1.02 1.8 1.8 0 0 0 .12-1.02c-.05-.08-.18-.13-.39-.23z"/>
              </svg>
            </a>

            {{-- Tombol detail (akses keyboard) --}}
            <button
              onclick="openModal({{ $loop->index }})"
              class="ml-3 px-4 py-2 bg-[#7CB518] text-white rounded-full font-semibold hover:bg-[#6aa015] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7CB518] transition"
            >
              Detail
            </button>
          </div>
        </div>

        {{-- modal markup (hidden by default) --}}
        <div id="modal-{{ $loop->index }}" class="fixed inset-0 z-50 flex items-center justify-center p-4 pointer-events-none opacity-0 transition-opacity duration-300">
          <div
            class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity duration-300"
            onclick="closeModal({{ $loop->index }})"
            aria-hidden="true"
          ></div>

          <div class="relative max-w-3xl w-full bg-white rounded-2xl shadow-xl overflow-hidden transform transition-transform duration-300 scale-95">
            <div class="flex items-start md:items-center gap-4 p-6">
              <img src="{{ $e['img'] }}" alt="{{ $e['nama'] }}" class="w-32 h-24 object-cover rounded-lg shadow-sm" />
              <div>
                <h4 class="text-xl font-bold text-[#111]">{{ $e['nama'] }}</h4>
                <p class="text-gray-600 mt-2">{{ $e['deskripsi'] }}</p>

                <div class="mt-4 flex gap-3 items-center">
                  <a href="{{ $e['ig'] }}" target="_blank" class="text-pink-600 hover:text-pink-400" aria-label="Instagram {{ $e['nama'] }}">
                    <!-- small svg -->
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zM4.5 7.75A3.25 3.25 0 0 1 7.75 4.5h8.5A3.25 3.25 0 0 1 19.5 7.75v8.5a3.25 3.25 0 0 1-3.25 3.25h-8.5A3.25 3.25 0 0 1 4.5 16.25v-8.5zm7.25 1a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 2a2.75 2.75 0 1 1 0 5.5 2.75 2.75 0 0 1 0-5.5zm5-2.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/></svg>
                  </a>
                  <a href="{{ $e['wa'] }}" target="_blank" class="text-green-600 hover:text-green-400" aria-label="WhatsApp {{ $e['nama'] }}">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a9.93 9.93 0 0 0-7.07 2.93A9.93 9.93 0 0 0 2 12a9.93 9.93 0 0 0 2.93 7.07A9.93 9.93 0 0 0 12 22a9.93 9.93 0 0 0 7.07-2.93A9.93 9.93 0 0 0 22 12a9.93 9.93 0 0 0-2.93-7.07A9.93 9.93 0 0 0 12 2zm0 18a8 8 0 0 1-4.21-1.19l-.3-.18-2.86.75.77-2.8-.2-.31A7.97 7.97 0 1 1 12 20zm3.84-5.06c-.21-.11-1.23-.61-1.42-.68s-.33-.1-.47.1-.54.68-.67.82-.25.15-.46.05a6.53 6.53 0 0 1-1.93-1.19 7.12 7.12 0 0 1-1.31-1.63c-.14-.25 0-.39.1-.53.1-.12.25-.32.37-.48s.16-.25.25-.41.05-.31-.03-.44c-.08-.11-.47-1.13-.65-1.55s-.35-.36-.48-.37h-.41a.79.79 0 0 0-.57.27 2.37 2.37 0 0 0-.74 1.77 4.18 4.18 0 0 0 .87 2.26 9.45 9.45 0 0 0 3.65 3.16c.51.22.9.34 1.2.43a2.87 2.87 0 0 0 1.32.08 2.22 2.22 0 0 0 1.45-1.02 1.8 1.8 0 0 0 .12-1.02c-.05-.08-.18-.13-.39-.23z"/></svg>
                  </a>
                </div>
              </div>

              {{-- close button --}}
              <button
                onclick="closeModal({{ $loop->index }})"
                class="ml-auto text-gray-500 hover:text-gray-700 focus:outline-none"
                aria-label="Tutup detail {{ $e['nama'] }}"
              >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </article>
    @endforeach
  </div>

  {{-- skrip modal + keyboard handling --}}
  <script>
    let openIndex = null;

    function openModal(idx) {
      const el = document.getElementById(`modal-${idx}`);
      if (!el) return;
      el.classList.remove('pointer-events-none', 'opacity-0');
      el.classList.add('pointer-events-auto', 'opacity-100');
      // add subtle scale-in
      const panel = el.querySelector('div.relative.max-w-3xl') || el.querySelector('div.relative');
      if (panel) panel.style.transform = 'translateY(0)';
      document.body.classList.add('overflow-hidden');
      openIndex = idx;
      // focus first focusable
      const focusable = el.querySelector('button, a[href], input, select, textarea');
      if (focusable) focusable.focus();
    }

    function closeModal(idx) {
      const el = document.getElementById(`modal-${idx}`);
      if (!el) return;
      el.classList.add('pointer-events-none', 'opacity-0');
      el.classList.remove('pointer-events-auto', 'opacity-100');
      document.body.classList.remove('overflow-hidden');
      openIndex = null;
    }

    // close modal with ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && openIndex !== null) {
        closeModal(openIndex);
      }
    });

    // prevent scroll on mobile when modal open handled by overflow-hidden on body
  </script>
</section>


@endsection
