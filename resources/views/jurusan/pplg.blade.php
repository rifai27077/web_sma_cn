@extends('layouts.app')

@section('content')

<!-- resources/views/pplg.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPLG - SMK Citra Negara</title>
</head>
<body class="bg-[#f8f8f8] text-gray-800">

  <!-- Section Header -->
  <section class="text-center py-16 bg-white shadow-sm">
    <h1 class="text-2xl md:text-4xl font-extrabold text-[#111]">
      Pengembangan Perangkat Lunak dan Gim (PPLG)
    </h1>
  </section>

  <!-- Career Bubble Section -->
  <section class="relative py-20 flex flex-col items-center overflow-hidden">
    <div class="absolute bg-[#7CB518]/10 w-[300px] h-[400px] rounded-full blur-3xl"></div>
    
    <div class="relative flex flex-wrap justify-center gap-6 mt-6">
      @php
        $career = [
          'Web Developer',
          'Programmer/Developer',
          'Quality Assurance (QA) Tester',
          'Game Developer',
          'UI/UX Designer',
          'Mobile App Developer',
        ];
      @endphp

      @foreach ($career as $job)
        <span class="px-6 py-3 bg-gray-100 text-gray-700 text-sm md:text-base font-medium rounded-full shadow hover:bg-[#7CB518] hover:text-white transition">
          {{ $job }}
        </span>
      @endforeach
    </div>
  </section>

  <!-- Materi & Deskripsi -->
  <section class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 px-6 py-14">
    
    <!-- Materi -->
    <div>
      <h2 class="text-xl font-semibold mb-5 text-[#111]">Materi yang akan dipelajari</h2>
      <div class="flex flex-wrap gap-3">
        @php
          $materi = [
            'Pemrograman Gim',
            'Pengembangan Perangkat Lunak',
            'Keamanan Perangkat Lunak',
            'Desain Antarmuka Pengguna (UI) dan Pengalaman Pengguna (UX)',
            'Dasar-dasar Pemrograman',
            'Database dan Sistem Manajemen Basis Data',
            'Manajemen Proyek Perangkat Lunak',
          ];
        @endphp

        @foreach ($materi as $m)
          <span class="px-4 py-2 bg-gray-100 rounded-full text-sm font-medium shadow hover:bg-[#7CB518] hover:text-white transition">
            {{ $m }}
          </span>
        @endforeach
      </div>
    </div>

    <!-- Deskripsi -->
    <div>
      <h2 class="text-xl font-semibold mb-4 text-[#111]">
        Apa Itu Bidang Studi Pengembangan Perangkat Lunak dan Gim?
      </h2>
      <p class="text-gray-600 leading-relaxed text-justify">
        Bidang studi Pengembangan Perangkat Lunak dan Gim adalah program pendidikan yang dirancang untuk mempersiapkan siswa dengan pengetahuan dan keterampilan praktis dalam bidang pengembangan perangkat lunak dan pembuatan gim. 
        Program ini bertujuan untuk menghasilkan lulusan yang siap bekerja di industri teknologi informasi dan hiburan digital, khususnya dalam pengembangan aplikasi perangkat lunak dan gim.
      </p>
    </div>
  </section>

  <!-- Tombol Kembali -->
  <div class="text-center py-10">
    <a href="{{ url('/') }}" 
       class="inline-flex items-center px-6 py-3 border border-[#7CB518] text-[#7CB518] font-semibold rounded-full hover:bg-[#7CB518] hover:text-white transition-all duration-300">
      ← Kembali ke Beranda
    </a>
  </div>

</body>
</html>
