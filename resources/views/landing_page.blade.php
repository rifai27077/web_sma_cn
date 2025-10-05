
@extends('layouts.app')


@section('content')

<!-- Link ke Panel Admin (bisa dikondisikan tampil jika admin login) -->

<!-- hero section -->
<section class="relative bg-gradient-to-b from-[#7CB518] to-green-100 overflow-hidden">
  <div class="absolute inset-0 w-full h-full z-0">
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

<!-- Sambutan Section -->
<section class="py-12 px-2 md:px-8 bg-white">
	<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center justify-center">
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

<!-- Visi Misi Section -->
<section class="bg-[#7CB518] py-8 px-4">
	<div class="max-w-4xl mx-auto flex flex-col md:flex-row gap-6 justify-center items-start">
		<div class="flex-1 bg-white rounded-2xl p-6 flex flex-col items-center shadow border border-gray-100">
			<div class="bg-[#7CB518] rounded-full w-12 h-12 flex items-center justify-center mb-3">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v4h-1m-4 0h-1v-4h-1m4 0h-1v4h-1" /></svg>
			</div>
			<h3 class="text-lg font-bold text-[#7CB518] mb-2">VISI</h3>
			<p class="text-center text-gray-700 text-sm">Terwujudnya Sekolah Kejuruan yang Religius, Disiplin dan Terampil Dalam Menyongsong Generasi Emas di tahun 2045.</p>
		</div>
		<div class="flex-1 bg-white rounded-2xl p-6 flex flex-col items-center shadow border border-gray-100">
			<div class="bg-[#FFD600] rounded-full w-12 h-12 flex items-center justify-center mb-3">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
			</div>
			<h3 class="text-lg font-bold text-[#FFD600] mb-2">MISI</h3>
			<p class="text-center text-gray-700 text-sm">Mewujudkan peserta didik yang berperilaku baik, patuh, dan memiliki jiwa kepemimpinan.</p>
		</div>
	</div>
</section>

<!-- Bidang Studi Kami Section -->
<section class="py-12 px-4 bg-white">
	<h2 class="text-2xl md:text-3xl font-bold text-center text-[#7CB518] mb-8">Bidang Studi Kami</h2>
	<div class="flex flex-wrap justify-center gap-4 mb-8">
		<span class="bg-[#FFE8A3] text-gray-800 font-semibold px-4 py-1 rounded-full text-sm">Pemasaran</span>
		<span class="bg-[#900B09] text-white font-semibold px-4 py-1 rounded-full text-sm">DKV</span>
		<span class="bg-[#E8B931] text-gray-800 font-semibold px-4 py-1 rounded-full text-sm">MPLB</span>
		<span class="bg-[#A3DE83] text-gray-800 font-semibold px-4 py-1 rounded-full text-sm">Perhotelan</span>
		<span class="bg-[#14104E] text-white font-semibold px-4 py-1 rounded-full text-sm">PPLG</span>
		<span class="bg-[#6EC6FF] text-gray-800 font-semibold px-4 py-1 rounded-full text-sm">TJKT</span>
	</div>
	<div class="flex flex-wrap justify-center items-end gap-4">
		<img src="/images/allmodel.png" alt="Bidang Studi Siswa" class="max-h-80 w-auto object-contain" />
	</div>
</section>

<!-- Pilihan Jurusan Section -->
<section class="py-8 px-4 bg-white">
	<h3 class="text-xl md:text-2xl font-bold text-center text-[#7CB518] mb-2">Pelajari bidang studi di Citra Negara,<br>dan temukan jurusan yang tepat untukmu!</h3>
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto mt-8">
		<!-- Card MPLB -->
		<div class="rounded-2xl bg-gradient-to-br from-[#E8B931] to-yellow-100 p-6 flex flex-col items-center shadow">
			<img src="/images/m-mplb.png" alt="MPLB" class="h-24 mb-2" />
			<h4 class="font-bold text-lg text-yellow-700 mb-1">MPLB</h4>
			<p class="text-sm mb-2">Manajemen Perkantoran dan Layanan Bisnis</p>
			<a href="#" class="inline-flex items-center px-4 py-2 bg-white border border-[#FFD600] text-[#FFD600] rounded-full font-semibold text-sm hover:bg-[#FFD600] hover:text-white transition">Ketahui lebih lanjut <span class="ml-1">→</span></a>
		</div>

		<!-- Card DKV -->
		<div class="rounded-2xl bg-gradient-to-br from-[#900B09] to-pink-300 p-6 flex flex-col items-center shadow">
			<img src="/images/m-dkv.png" alt="DKV" class="h-24 mb-2" />
			<h4 class="font-bold text-lg text-red-900 mb-1">DKV</h4>
			<p class=" text-sm mb-2">Desain Komunikasi Visual</p>
			<a href="#" class="inline-flex items-center px-4 py-2 bg-white border border-[#FF6B6B] text-[#FF6B6B] rounded-full font-semibold text-sm hover:bg-[#FF6B6B] hover:text-white transition">Ketahui lebih lanjut <span class="ml-1">→</span></a>
		</div>

		<!-- Card PPLG -->
		<div class="rounded-2xl bg-gradient-to-br from-[#14104E] to-blue-300 p-6 flex flex-col items-center shadow">
			<img src="/images/m-pplg.png" alt="PPLG" class="h-24 mb-2" />
			<h4 class="font-bold text-lg text-yellow-300 mb-1">PPLG</h4>
			<p class="text-white text-sm mb-2">Pengembangan Perangkat Lunak dan Gim</p>
			<a href="#" class="inline-flex items-center px-4 py-2 bg-white border border-[#7B6CF6] text-[#7B6CF6] rounded-full font-semibold text-sm hover:bg-[#7B6CF6] hover:text-white transition">Ketahui lebih lanjut <span class="ml-1">→</span></a>
		</div>

		<!-- Card TJKT -->
		<div class="rounded-2xl bg-gradient-to-br from-blue-400 to-blue-100 p-6 flex flex-col items-center shadow">
			<img src="/images/m-tkj.png" alt="TJKT" class="h-24 mb-2" />
			<h4 class="font-bold text-lg text-blue-900 mb-1">TJKT</h4>
			<p class="text-black text-sm text-center mb-2">Teknik Jaringan Komputer dan Telekomunikasi</p>
			<a href="#" class="inline-flex items-center px-4 py-2 bg-white border border-[#6EC6FF] text-[#6EC6FF] rounded-full font-semibold text-sm hover:bg-[#6EC6FF] hover:text-white transition">Ketahui lebih lanjut <span class="ml-1">→</span></a>
		</div>

		<!-- Card PM -->
		<div class="rounded-2xl bg-gradient-to-br from-[#FFB84C] to-[#FFD580] p-6 flex flex-col items-center shadow">
        <img src="/images/m-pm.png" alt="PM" class="h-24 mb-2" />
        <h4 class="font-bold text-lg text-[#E26A00] mb-1">PM</h4>
        <p class="text-gray-800 text-sm mb-2">Pemasaran</p>
        <a href="#"
            class="inline-flex items-center px-4 py-2 bg-white border border-[#E26A00] text-[#E26A00] rounded-full font-semibold text-sm hover:bg-[#E26A00] hover:text-white transition">
            Ketahui lebih lanjut <span class="ml-1">→</span>
        </a>
        </div>

		<!-- Card PH -->
		<div class="rounded-2xl bg-gradient-to-br from-green-200 to-gray-100 p-6 flex flex-col items-center shadow">
			<h4 class="font-bold text-lg text-green-700 mb-1">PH</h4>
			<p class="text-gray-700 text-sm mb-2">Perhotelan</p>
			<a href="#" class="inline-flex items-center px-4 py-2 bg-white border border-green-700 text-green-700 rounded-full font-semibold text-sm hover:bg-green-700 hover:text-white transition">Ketahui lebih lanjut <span class="ml-1">→</span></a>
		</div>
	</div>
</section>

<!-- Prestasi Section -->
<section class="py-12 px-4 bg-white">
	<h3 class="text-xl md:text-2xl font-bold text-center mb-8">Jejak prestasi yang <span class="bg-[#7CB518] text-white px-2 rounded">membanggakan</span></h3>
	<div class="flex flex-wrap justify-center gap-6">
		<img src="/images/prestasi-1.jpg" alt="Juara 1" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-2.jpg" alt="Juara Nasional" class="w-72 rounded-xl shadow border border-gray-100" />
		<img src="/images/prestasi-3.jpg" alt="Juara Utama 2" class="w-72 rounded-xl shadow border border-gray-100" />
	</div>
</section>

<!-- Ekstrakurikuler Section -->
<section class="py-12 px-4 bg-white">
	<div class="flex justify-center">
		<button class="px-8 py-3 border-2 border-[#7CB518] rounded-full text-[#7CB518] font-bold text-lg bg-white hover:bg-[#7CB518] hover:text-white transition">Ekstrakurikuler</button>
	</div>
</section>
@endsection
