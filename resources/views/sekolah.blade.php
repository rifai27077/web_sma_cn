@extends('layouts.app')

@section('content')
<section class="py-20 px-6 bg-white" id="sejarah-organisasi" data-aos="fade-up" data-aos-duration="1000">
  <div class="max-w-7xl mx-auto text-black">
    <!-- Sejarah -->
    <h3 class="text-3xl md:text-4xl font-extrabold mb-6">Sejarah</h3>
    <div class="text-base md:text-lg leading-relaxed space-y-4 mb-12">
      <p>
        Yayasan AT-TAQWA Kemiri Jaya dibangun pada tahun 2004 di Jl. Raya Tanah Baru No.99 Kemiri Jaya, Beji, Depok 16421.
        Yayasan ini diprakarsai serta dimiliki oleh Bpk. <span class="font-semibold">H. Drs. Nasan, M.M</span>, kemudian di tahun yang sama sekolah SMK Citra Negara dibuka.
      </p>
      <p>
        Sekolah SMK Citra Negara berdiri pada tahun 2004, pada awal berdirinya SMK Citra Negara yang berada di bawah yayasan AT-TAQWA hanya memiliki 1 program keahlian yaitu Tata Niaga (TN).
        Kemudian pada tahun 2007 SMK Citra Negara kembali membuka program keahlian baru yaitu Teknik Komputer Jaringan (TKJ),
        lalu jurusan Multimedia (MM) pada tahun 2011, jurusan Administrasi Perkantoran (AP) pada tahun 2015,
        dan yang terakhir adalah jurusan Rekayasa Perangkat Lunak (RPL) yang didirikan pada tahun yang sama dengan jurusan AP yaitu pada tahun 2015.
        Sehingga total program keahlian yang dimiliki SMK Citra Negara pada saat ini berjumlah 5 jurusan.
      </p>
    </div>

    <!-- Garis Pemisah -->
    <div class="border-t border-gray-200 my-12"></div>

    <!-- Struktur Organisasi -->
    <h3 class="text-3xl md:text-4xl font-extrabold mb-6">Struktur Organisasi</h3>
    {{-- <p class="text-[#555] text-base md:text-lg leading-relaxed mb-8">
      Berikut merupakan struktur organisasi SMK Citra Negara yang menunjukkan susunan dan peran setiap bagian dalam mendukung kegiatan belajar mengajar serta pengembangan sekolah.
    </p> --}}

    <!-- Gambar Struktur Organisasi -->
    <div class="flex justify-start">
      <img
        id="strukturImage"
        src="{{ asset('images/struktur-organisasi.jpg') }}"
        alt="Struktur Organisasi SMK Citra Negara"
        loading="lazy" decoding="async"
        class="rounded-xl shadow-md w-full md:w-[70%] lg:w-[60%] object-contain border border-gray-200 transition-transform duration-300 hover:scale-[1.02] cursor-pointer"
      />
    </div>
  </div>
</section>

<!-- Modal Zoom Gambar -->
<div id="imageModal" class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">
  <div class="relative max-w-5xl w-[90%]">
    <button id="closeModal" class="absolute top-2 right-2 text-white text-2xl font-bold hover:text-gray-300">&times;</button>
    <img src="{{ asset('images/struktur-organisasi.jpg') }}" loading="lazy" decoding="async" alt="Struktur Organisasi Detail" class="rounded-xl shadow-lg w-full h-auto object-contain">
  </div>
</div>

<!-- Script Modal -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('strukturImage');
    const closeBtn = document.getElementById('closeModal');

    img.addEventListener('click', () => {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    });

    closeBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    });

    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }
    });
  });
</script>
@endsection
