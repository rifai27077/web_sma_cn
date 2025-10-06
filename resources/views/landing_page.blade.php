
@extends('layouts.app')


@section('content')

<!-- Link ke Panel Admin (bisa dikondisikan tampil jika admin login) -->

<!-- hero section -->
<section class="relative bg-gradient-to-b from-[#7CB518] to-green-100 overflow-hidden">
  <div class="absolute inset-0 w-full h-full z-0">
	<div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-black/60"></div>
    <video autoplay loop muted playsinline class="w-full h-full object-cover">
      <source src="/videos/smk.MOV" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 flex flex-col items-center justify-center min-h-[400px]" style="min-height:400px;">
        <div class="w-full md:w-2/3 mx-auto text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Selamat Datang di <span class="bg-white text-[#7CB518] px-2 rounded">SMK Citra Negara</span></h1>
        <p class="text-white text-lg mb-6">Mencetak generasi yang terampil, berkarakter, dan siap bersaing di dunia kerja serta melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
    </div>
  </div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

<!-- Sambutan Section -->
<section class="py-20 px-6 bg-white">
	<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center justify-center">
		<!-- Kiri: Foto dan box pengalaman -->
		<div class="flex gap-6 items-center md:items-stretch">
            <div class="mt-4 grid justify-start">
                <img src="/images/u-smk2.png" alt="Lapangan SMK" class="w-64 h-64 object-cover rounded-2xl shadow" />

				<div class="bg-[#7CB518] rounded-xl px-10 py-7 flex flex-col items-center shadow mt-4">
					<span class="text-4xl md:text-5xl font-bold text-white leading-none">20</span>
					<span class="text-white text-lg font-medium mt-1">Years Of Experience</span>
				</div>
			</div>

			<div class="flex mt-4">
				<img src="/images/kp-smk.jpg" alt="Kepala Sekolah" class="w-full h-80 object-cover rounded-2xl shadow" />
			</div>
		</div>

		<!-- Kanan: Sambutan dan judul -->
		<div class="pt-6 md:pt-0">
			<div class="mb-2 text-[#222] text-sm font-semibold tracking-wide uppercase flex items-center gap-2">
				<span>Sambutan Kepala Sekolah</span>
				<span class="block w-12 h-0.5 bg-[#222] rounded"></span>
			</div>
			<h2 class="text-2xl md:text-3xl font-extrabold text-[#111] mb-3">Abdul Kodir Zaelani, S.Pd.I.</h2>
			<div class="text-[#444] text-sm md:text-base leading-relaxed space-y-3">
				<p>Assalamu’alaikum warahmatullahi wabarakatuh,</p>
				<p>Saya Abdul Kodir Zaelani, S.Pd.I. selaku kepala sekolah SMK Citra Negara, salam sejahtera untuk seluruh siswa-siswi, orang tua, guru, dan staf sekolah kita yang tercinta.</p>
				<p>Selamat datang di SMK Citra Negara, Lembaga pendidikan yang berkomitmen mencetak generasi yang terampil, berkarakter, dan siap bersaing di dunia kerja serta melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
				<p>Di era globalisasi dan digitalisasi ini, tantangan di dunia industri semakin kompleks. Oleh karena itu, kami di SMK Citra Negara senantiasa berupaya memberikan pendidikan berbasis kompetensi, mengedepankan nilai-nilai kejujuran, disiplin, dan inovasi. Dengan kurikulum yang relevan, tenaga pendidik yang profesional, serta fasilitas lengkap yang mendukung proses pembelajaran, kami berharap dapat memberikan pengalaman belajar terbaik bagi para siswa. Kami berharap semua pihak dapat bersinergi dalam mewujudkan visi dan misi sekolah ini. Semoga Allah SWT senantiasa meridhai setiap langkah kita dalam mencerdaskan kehidupan bangsa.</p>
				<p>Wassalamu’alaikum warahmatullahi wabarakatuh.</p>
			</div>
		</div>
	</div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

<!-- Visi Misi Section -->
<section class="py-20 px-6 bg-[#699D15]">
            <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition flex flex-col h-full">
                    <div class="flex items-center mb-6">
                        <span class="flex items-center justify-center bg-[#699D15] rounded-full h-14 w-14 mr-4" style="box-shadow: inset 0 8px 32px 0 rgba(0,0,0,0.12);">
                            <img src="/images/sparkles.png" class="h-8 w-8">
                        </span>
                        <span class="text-2xl md:text-3xl font-extrabold text-[#699D15] uppercase tracking-wide text-left">VISI</span>
                    </div>
                    <p class="text-gray-700 text-left text-base md:text-lg">Terwujudnya Sekolah yang Religius, Disiplin dan Terampil Dalam Menyongsong Generasi Emas di tahun 2045</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition flex flex-col h-full">
                    <div class="flex items-center mb-6">
                        <span class="flex items-center justify-center bg-[#E9DC00] rounded-full h-14 w-14 mr-4" style="box-shadow: inset 0 8px 32px 0 rgba(0,0,0,0.12);">
                            <img src="/images/vector.png" class="h-8 w-8">
                        </span>
                        <span class="text-2xl md:text-3xl font-extrabold text-[#E9DC00] uppercase tracking-wide text-left">MISI</span>
                    </div>
                    <p class="text-gray-700 text-left text-base md:text-lg">Mewujudkan Insan yang taat beribadah, cinta kepada kitab suci dan pandai dalam dakwah keagamaan. Mewujudkan peserta didik yang berperilaku baik, patuh, dan memiliki jiwa kepemimpinan. Mewujudkan peserta didik yang ahli sesuai dengan kejuruan, sinkronasi kurikulum intrakurikuler dengan ekstrakurikuler, dan pengembangan kerjasama dengan dunia industri.</p>
                </div>
            </div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

<!-- Bidang Studi Kami Section -->
<section class="py-20 px-6 bg-gradient-to-b from-white to-green-50">
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
        class="relative z-10 w-full max-w-5xl object-contain drop-shadow-2xl transition-transform duration-300 hover:scale-105" />
	</div>
  </div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

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
        
        <a href="#" class="relative z-10 inline-flex items-center px-5 py-2 bg-white {{ $j['border'] }} border text-sm font-semibold rounded-full transition-all duration-300 hover:text-white hover:bg-[#7CB518]">
          Ketahui lebih lanjut <span class="ml-2">→</span>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

<!-- Prestasi Section -->
<section class="py-20 px-6 bg-white">
	<h3 class="text-xl md:text-2xl font-bold text-center mb-8">Jejak prestasi yang <span class="bg-[#7CB518] text-white px-2 rounded">membanggakan</span></h3>
	<div class="flex flex-wrap justify-center gap-6">
		<img src="/images/prestasi-1.jpg" alt="Juara 1" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-2.jpg" alt="Juara Nasional" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-3.jpg" alt="Juara Utama 2" class="w-72 rounded-xl shadow border border-gray-100" />
	</div>
</section>

<div class="h-px bg-gradient-to-r from-transparent via-gray-300/50 to-transparent my-10"></div>

<!-- Ekstrakurikuler Section -->
<section class="py-20 px-6 bg-white">
	<div class="bg-green-100 rounded-xl p-6 text-center shadow hover:shadow-lg transition">
		<img src="/images/pramuka.png" class="mx-auto h-16 mb-3">
		<h4 class="font-semibold text-green-700">Pramuka</h4>
  	</div>
</section>
@endsection
