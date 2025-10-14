@extends('layouts.app')

@section('content')
<section class="py-20 px-4 bg-white" id="founder" data-aos="fade-up">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#699D15] drop-shadow-[0_2px_6px_rgba(106,152,18,0.5)] mb-2">Founder</h2>
    <p class="text-xl md:text-2xl font-semibold text-[#699D15] mb-10">Yayasan AT–TAQWA Kemiri Jaya</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 items-end justify-items-center">

      <!-- Ketua BPH -->
      <div class="flex flex-col items-center relative lg:pt-12 w-56 sm:w-64 order-2 lg:order-1">
        <img src="{{ asset('images/ketuabph.png') }}" loading="lazy" decoding="async" class="object-contain w-full h-auto max-h-80" alt="Ketua BPH">
        <span class="inline-block bg-[#E9DC00] font-bold text-base md:text-lg rounded-full px-6 py-2 shadow whitespace-nowrap">
          Dr. M. Rizki Darmaguna Hasan, S.Tr., M.Pd
        </span>
        <p class="text-gray-700 mt-1 text-sm md:text-base">Ketua BPH</p>
      </div>

      <!-- Penasehat -->
      <div class="flex flex-col items-center relative lg:mb-12 w-64 sm:w-72 order-1 lg:order-2">
        <img src="{{ asset('images/penasehat.png') }}" loading="lazy" decoding="async" class="object-contain w-full h-auto max-h-96" alt="Penasehat Yayasan YATKJ">
        <span class="inline-block bg-[#E9DC00] font-bold text-base md:text-lg rounded-full px-6 py-2 shadow whitespace-nowrap">
          Drs. H. Nasan, M.M &amp; Hj. Mutia, S.Pd., M.M
        </span>
        <p class="text-gray-700 mt-1 text-sm md:text-base">Penasehat Yayasan YATKJ</p>
      </div>

      <!-- Wakil BPH -->
      <div class="flex flex-col items-center relative lg:pt-12 w-48 sm:w-60 order-3 lg:order-3">
        <img src="{{ asset('images/wakilbph.png') }}" loading="lazy" decoding="async" class="object-contain w-full h-auto max-h-80" alt="Wakil Ketua BPH">
        <span class="inline-block bg-[#E9DC00] font-bold text-base md:text-lg rounded-full px-6 py-2 shadow whitespace-nowrap">
          Agustin Wijayanti, S.H., M.M
        </span>
        <p class="text-gray-700 mt-1 text-sm md:text-base">Wakil Ketua BPH</p>
      </div>

    </div>
  </div>
</section>
@endsection