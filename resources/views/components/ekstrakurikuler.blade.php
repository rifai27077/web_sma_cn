<section class="py-20 min-h-[600px] px-6 bg-white" id="ekstrakurikuler">
  <div class="max-w-7xl mx-auto text-center mb-14">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
        <span class="text-[#7CB518]">Ekstrakurikuler</span> SMK Citra Negara
    </h2>
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
              loading="lazy" decoding="async"
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
              <img src="{{ $e['img'] }}" alt="{{ $e['nama'] }}" loading="lazy" decoding="async" class="w-32 h-24 object-cover rounded-lg shadow-sm" />
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