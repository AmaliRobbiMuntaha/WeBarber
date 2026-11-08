@extends('layouts.app')
@section('title', 'WeBarber | Contact')

@push('styles')
<style>
  html { scroll-behavior: smooth; }
  body { -webkit-font-smoothing: antialiased; background: #f5f5f7; }

  /* ===== Banner ===== */
  .wb-banner { background: #0a0a0a; padding: 4rem 2rem; text-align: center; }
  .wb-banner .eyebrow { margin: 0 0 1rem; font-size: .7rem; font-weight: 700; letter-spacing: .3em; text-transform: uppercase; color: #b8a060; }
  .wb-banner h2 { margin: 0 0 1rem; font-size: clamp(2rem, 5vw, 3.4rem); font-weight: 800; line-height: 1; letter-spacing: -1px; color: #fff; }
  .wb-banner p.desc { margin: 0 auto; max-width: 500px; font-size: .9rem; font-weight: 300; color: rgba(255,255,255,.6); }

  /* ===== Layout ===== */
  .wb-main { max-width: 960px; margin: 0 auto; padding: 0 1.5rem 6rem; }
  .wb-section { margin-top: 3rem; }
  .wb-section + .wb-section { margin-top: 3.5rem; }
  .wb-section .eyebrow { margin: 0 0 .25rem; font-size: .68rem; font-weight: 700; letter-spacing: .25em; text-transform: uppercase; color: #b8a060; }
  .wb-section h3 { margin: 0 0 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #d2d2d7; font-size: 1.55rem; font-weight: 800; letter-spacing: -.5px; color: #0a0a0a; }

  /* ===== Alerts ===== */
  .wb-alert { display: flex; align-items: flex-start; gap: .75rem; margin-bottom: 1rem; padding: .75rem 1rem; border-radius: .75rem; font-size: .85rem; }
  .wb-alert.success { background: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; font-weight: 500; align-items: center; }
  .wb-alert.info { background: #fffbeb; border: 1px solid #fde68a; color: #92400e; }
  .wb-alert a { font-weight: 600; text-decoration: underline; color: inherit; }

  /* ===== Form ===== */
  .wb-form { background: #fff; border: 1px solid #d2d2d7; border-radius: 1rem; padding: 1.75rem; box-shadow: 0 1px 4px rgba(0,0,0,.04); }
  .wb-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem 1.25rem; }
  .wb-field { display: flex; flex-direction: column; gap: .375rem; min-width: 0; }
  .wb-field.full { margin-top: 1rem; }
  .wb-field label { font-size: .8rem; font-weight: 600; color: #3a3a3c; }
  .wb-field input,
  .wb-field select,
  .wb-field textarea {
    width: 100%; box-sizing: border-box; padding: .75rem .875rem;
    border: 1px solid #d2d2d7; border-radius: .5rem; background: #fff;
    font: inherit; font-size: .88rem; color: #1d1d1f; outline: none;
    transition: border-color .15s, box-shadow .15s;
  }
  .wb-field textarea { resize: vertical; }
  .wb-field input::placeholder,
  .wb-field textarea::placeholder { color: #aeaeb2; }
  .wb-field input:focus,
  .wb-field select:focus,
  .wb-field textarea:focus { border-color: #b8a060; box-shadow: 0 0 0 3px rgba(184,160,96,.2); }

  .wb-actions { display: flex; flex-wrap: wrap; align-items: center; gap: .75rem; margin-top: 1.5rem; }
  .wb-btn {
    display: inline-block; padding: .75rem 1.25rem; border-radius: .5rem;
    font: inherit; font-size: .82rem; font-weight: 600; text-decoration: none;
    cursor: pointer; transition: background .15s;
  }
  .wb-btn.primary { background: #0a0a0a; color: #fff; border: 0; }
  .wb-btn.primary:hover { background: #292929; }
  .wb-btn.ghost { background: #fff; color: #3a3a3c; border: 1px solid #d2d2d7; }
  .wb-btn.ghost:hover { background: #f5f5f7; }
  .wb-btn:focus-visible { outline: 2px solid #b8a060; outline-offset: 2px; }

  /* ===== Table ===== */
  .wb-table-wrap { overflow-x: auto; background: #fff; border: 1px solid #d2d2d7; border-radius: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,.05); }
  .wb-table { width: 100%; border-collapse: collapse; text-align: left; font-size: .86rem; }
  .wb-table thead { background: #0a0a0a; }
  .wb-table th { padding: .75rem 1.25rem; font-size: .7rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: rgba(255,255,255,.7); }
  .wb-table td { padding: 1rem 1.25rem; color: #3a3a3c; border-top: 1px solid #e8e8ed; }
  .wb-table tbody tr:first-child td { border-top: 0; }
  .wb-table tbody tr:hover { background: #f5f5f7; }
  .wb-table td.num { color: #6e6e73; }
  .wb-table td.name { font-weight: 600; color: #0a0a0a; }

  /* ===== About ===== */
  .wb-about { display: flex; flex-direction: column; gap: 1rem; font-size: .9rem; line-height: 1.7; color: #3a3a3c; }
  .wb-about p { margin: 0; }
  .wb-about strong { font-weight: 600; color: #0a0a0a; }

  /* ===== Mobile ===== */
  @media (max-width: 640px) {
    .wb-banner { padding: 3rem 1.25rem; }
    .wb-main { padding: 0 1rem 6rem; }
    .wb-section { margin-top: 2.25rem; }
    .wb-section + .wb-section { margin-top: 2.5rem; }
    .wb-form { padding: 1.25rem; }
    .wb-grid { grid-template-columns: 1fr; }
    .wb-table { min-width: 620px; }
  }
</style>
@endpush

@section('content')

{{-- Banner --}}
<section class="wb-banner">
  <p class="eyebrow">Get in touch</p>
  <h2>Contact Us</h2>
  <p class="desc">Ready to look your best? Fill out the form below to schedule your appointment.</p>
</section>

<main class="wb-main">

  {{-- Reservation Form --}}
  <section class="wb-section" id="reservation">
    <p class="eyebrow">Reservation</p>
    <h3>Reservation Form</h3>

    {{-- ✓ Sukses --}}
    @if(session('success'))
    <div class="wb-alert success"><span>✓</span> {{ session('success') }}</div>
    @endif

    {{-- ⚠ Error --}}
    @if($errors->any())
    <div style="margin-bottom:1.25rem;border-radius:.875rem;border:1px solid #fecaca;background:#fef2f2;overflow:hidden;">
      <div style="display:flex;align-items:center;gap:.6rem;padding:.75rem 1.1rem;background:#fee2e2;border-bottom:1px solid #fecaca;">
        <span style="color:#dc2626;font-size:1rem;">⚠</span>
        <p style="margin:0;font-size:.88rem;font-weight:700;color:#991b1b;">
          @if($errors->has('start_time') && str_contains($errors->first('start_time'), 'jadwal'))
            Slot Waktu Tidak Tersedia
          @else
            Booking Tidak Berhasil
          @endif
        </p>
      </div>
      <div style="padding:.75rem 1.1rem;display:flex;flex-direction:column;gap:.4rem;">
        @foreach($errors->all() as $error)
        <p style="margin:0;font-size:.85rem;color:#b91c1c;display:flex;gap:.5rem;">
          <span>—</span>
          <span>
            @if(str_contains($error, 'jadwal'))
              <strong>Barber sudah ada jadwal di waktu tersebut.</strong> Pilih waktu atau barber lain.
            @else
              {{ $error }}
            @endif
          </span>
        </p>
        @endforeach
      </div>
      @if($errors->has('start_time'))
      <div style="padding:.5rem 1.1rem;background:#fef2f2;border-top:1px solid #fecaca;font-size:.8rem;color:#dc2626;">
        💡 <strong>Tips:</strong> Coba pilih jam berbeda, atau barber lain yang tersedia.
      </div>
      @endif
    </div>
    @endif

    @guest
    <div class="wb-alert info" style="margin-bottom:1.25rem;">
      <span>ℹ</span>
      <span><a href="{{ route('login') }}">Login</a> terlebih dahulu untuk membuat reservasi.</span>
    </div>
    @endguest

    @auth
    <form action="{{ route('customer.booking.store') }}" method="POST" class="wb-form">
    @else
    <form action="#" method="post" class="wb-form" onsubmit="window.location='{{ route('login') }}';return false;">
    @endauth
      @csrf

      <div class="wb-grid">

        {{-- Barber --}}
        <div class="wb-field">
          <label for="barber_id">Choose Barber</label>
          <select id="barber_id" name="barber_id" required
            style="{{ $errors->has('barber_id') ? 'border-color:#f87171;' : '' }}">
            <option value="" disabled selected>Choose barber</option>
            @foreach($barbers as $barber)
            <option value="{{ $barber->id }}" {{ old('barber_id') == $barber->id ? 'selected' : '' }}>
              {{ $barber->user->name }}{{ $barber->specialty ? ' — ' . $barber->specialty : '' }}
            </option>
            @endforeach
          </select>
        </div>

        {{-- Tanggal --}}
        <div class="wb-field">
          <label for="booking_date">Reservation Date</label>
          <input type="date" id="booking_date" name="booking_date"
            value="{{ old('booking_date') }}"
            min="{{ date('Y-m-d') }}" required
            style="{{ $errors->has('booking_date') ? 'border-color:#f87171;' : '' }}" />
        </div>

        {{-- Jam --}}
        <div class="wb-field">
          <label for="start_time">Start Time <span style="font-weight:400;color:#aeaeb2;">(09:00 – 21:00)</span></label>
          <input type="time" id="start_time" name="start_time"
            value="{{ old('start_time') }}"
            min="09:00" max="21:00" required
            style="{{ $errors->has('start_time') ? 'border-color:#f87171;background:#fef2f2;' : '' }}" />
          @if($errors->has('start_time'))
          <p style="margin:.2rem 0 0;font-size:.78rem;color:#dc2626;font-weight:500;">⚠ Waktu ini sudah terisi. Pilih jam lain.</p>
          @endif
        </div>

        {{-- Notes --}}
        <div class="wb-field">
          <label for="notes">Note for Barber <span style="font-weight:400;color:#aeaeb2;">(optional)</span></label>
          <textarea id="notes" name="notes" rows="3"
            placeholder="E.g: what hairstyle do you want? reference photo?">{{ old('notes') }}</textarea>
        </div>

      </div>

      {{-- ── Choose Service ── --}}
      <div style="margin-top:1.5rem;">

        {{-- Header baris: label + live summary --}}
        <div style="display:flex;align-items:center;justify-content:space-between;gap:.75rem;margin-bottom:1rem;padding-bottom:.75rem;border-bottom:1px solid #e8e8ed;">
          <div>
            <p style="margin:0 0 .15rem;font-size:.68rem;font-weight:700;letter-spacing:.25em;text-transform:uppercase;color:#b8a060;">Services</p>
            <span style="font-size:.88rem;font-weight:550;color:#0a0a0a; margin-top:-.25rem;">Choose Service</span>
            <span style="font-size:.8rem;font-weight:400;color:#aeaeb2;margin-left:.35rem;">(Haircut &amp; Beard: max 1 each)</span>
          </div>
          {{-- Live summary: muncul saat ada yang dipilih --}}
          <div id="svc-summary" style="display:none;text-align:right;flex-shrink:0;">
            <p style="margin:0;font-size:.78rem;font-weight:700;color:#0a0a0a;" id="svc-total"></p>
            <p style="margin:.1rem 0 0;font-size:.72rem;font-weight:500;color:#6e6e73;" id="svc-dur"></p>
          </div>
        </div>

        @php
          /* Kelompokkan services berdasarkan kategori.
             Prioritas: kolom 'category' jika ada, fallback ke deteksi nama. */
          $grouped = $services->groupBy(function($s) {
            if (!empty($s->category)) return $s->category;
            $name = strtolower($s->name);
            if (str_contains($name, 'beard') || str_contains($name, 'shave') || str_contains($name, 'hot towel') || str_contains($name, 'combo')) return 'Beard & Shave';
            if (str_contains($name, 'wash') || str_contains($name, 'scalp') || str_contains($name, 'coloring') || str_contains($name, 'pomade') || str_contains($name, 'massage')) return 'Hair & Scalp Treatment';
            return 'Haircut & Styling';
          });

          /* 'single' => true : hanya boleh pilih 1 service di kategori itu */
          $categoryMeta = [
            'Haircut & Styling'    => ['eyebrow' => 'Haircut',   'single' => true],
            'Beard & Shave'        => ['eyebrow' => 'Beard',     'single' => true],
            'Hair & Scalp Treatment' => ['eyebrow' => 'Treatment', 'single' => false],
          ];
        @endphp

        @foreach($grouped as $category => $categoryServices)
        @php
          $meta = $categoryMeta[$category] ?? ['eyebrow' => 'Services', 'single' => false];
        @endphp

        {{-- Category header --}}
        <div style="display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem;{{ !$loop->first ? 'margin-top:1.5rem;' : '' }}">
          <div>
            <p style="margin:0;font-size:.65rem;font-weight:700;letter-spacing:.22em;text-transform:uppercase;color:#b8a060;line-height:1;">{{ $meta['eyebrow'] }}</p>
            <p style="margin:.1rem 0 0;font-size:.9rem;font-weight:600;color:#0a0a0a;letter-spacing:-.3px;line-height:1.2; margin-top:.25rem;">
              {{ $category }}
              <span style="font-size:.72rem;font-weight:400;color:#aeaeb2;margin-left:.25rem;">
                {{ $meta['single'] ? '(pilih 1)' : '(boleh lebih dari 1)' }}
              </span>
            </p>
          </div>
        </div>

        {{-- Service cards grid --}}
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:.75rem;">
          @foreach($categoryServices as $service)
          @php $checked = in_array($service->id, old('service_ids', [])); @endphp
          <label
            class="svc-card"
            data-category="{{ $category }}"
            data-single="{{ $meta['single'] ? '1' : '0' }}"
            data-price="{{ $service->price }}"
            data-duration="{{ $service->duration_minutes }}"
            style="position:relative;display:flex;flex-direction:column;gap:.4rem;padding:1rem 1.1rem;
                   border:1px solid {{ $checked ? '#0a0a0a' : '#d2d2d7' }};
                   border-radius:.875rem;
                   background:{{ $checked ? '#0a0a0a' : '#fff' }};
                   cursor:pointer;transition:all .2s;box-shadow:0 1px 3px rgba(0,0,0,.04);">
            <input type="checkbox" name="service_ids[]" value="{{ $service->id }}"
              {{ $checked ? 'checked' : '' }}
              class="svc-check" style="position:absolute;opacity:0;pointer-events:none;" />
            {{-- tick badge --}}
            <span class="svc-tick" style="position:absolute;top:.65rem;right:.75rem;width:1.15rem;height:1.15rem;border-radius:50%;
                         border:1px solid {{ $checked ? '#b8a060' : '#d2d2d7' }};
                         background:{{ $checked ? '#b8a060' : 'transparent' }};
                         display:flex;align-items:center;justify-content:center;
                         font-size:.6rem;font-weight:700;
                         color:{{ $checked ? '#fff' : 'transparent' }};
                         transition:all .2s;">✓</span>
            {{-- nama & harga --}}
            <div style="display:flex;align-items:baseline;justify-content:space-between;gap:.4rem;padding-right:1.6rem;">
              <span class="svc-name" style="font-size:.88rem;font-weight:700;line-height:1.3;transition:color .2s;
                           color:{{ $checked ? '#fff' : '#0a0a0a' }};">{{ $service->name }}</span>
              <span class="svc-price" style="font-size:.82rem;font-weight:700;white-space:nowrap;transition:color .2s;
                           color:{{ $checked ? '#b8a060' : '#0a0a0a' }};">
                Rp {{ number_format($service->price, 0, ',', '.') }}
              </span>
            </div>
            @if($service->description)
            <p class="svc-desc" style="margin:0;font-size:.76rem;line-height:1.5;transition:color .2s;
                       color:{{ $checked ? 'rgba(255,255,255,.5)' : '#6e6e73' }};">
              {{ Str::limit($service->description, 70) }}
            </p>
            @endif
            {{-- durasi & hint --}}
            <div style="display:flex;align-items:center;justify-content:space-between;margin-top:.15rem;">
              <span class="svc-dur-label" style="font-size:.68rem;font-weight:600;text-transform:uppercase;letter-spacing:.05em;transition:color .2s;
                           color:{{ $checked ? 'rgba(255,255,255,.4)' : '#aeaeb2' }};">
                ± {{ $service->duration_minutes }} min
              </span>
              <span class="svc-hint" style="font-size:.68rem;font-weight:700;letter-spacing:.04em;transition:color .2s;
                           color:{{ $checked ? '#b8a060' : 'transparent' }};">
                {{ $checked ? 'DIPILIH ✓' : 'PILIH →' }}
              </span>
            </div>
          </label>
          @endforeach
        </div>

        @endforeach

        @error('service_ids')
        <p style="margin:.5rem 0 0;font-size:.78rem;color:#dc2626;font-weight:500;">⚠ Pilih minimal satu layanan.</p>
        @enderror

      </div>

      <div class="wb-actions">
        @auth
        <button type="submit" class="wb-btn primary">Make a Reservation</button>
        <button type="reset" class="wb-btn ghost" id="rsvp-reset">Reset</button>
        @else
        <a href="{{ route('login') }}" class="wb-btn primary">Login to Book →</a>
        @endauth
      </div>

    </form>
  </section>

  {{-- Owner & Founder --}}
  <section class="wb-section">
    <p class="eyebrow">The people behind WeBarber</p>
    <h3>Owner &amp; Founder</h3>
    <div class="wb-table-wrap">
      <table class="wb-table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Contact</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="num">1</td>
            <td class="name">Evan</td>
            <td>Founder &amp; Head Barber</td>
            <td>evangalangwry11@email.com</td>
          </tr>
          <tr>
            <td class="num">2</td>
            <td class="name">Fairus</td>
            <td>Co-Founder &amp; Vice Barber</td>
            <td>fairuzrasidin33@email.com</td>
          </tr>
          <tr>
            <td class="num">3</td>
            <td class="name">Robbi</td>
            <td>Barber</td>
            <td>robbi@email.com</td>
          </tr>
          <tr>
            <td class="num">4</td>
            <td class="name">Rakha</td>
            <td>Barber</td>
            <td>rakha@email.com</td>
          </tr>
          <tr>
            <td class="num">5</td>
            <td class="name">Akbar</td>
            <td>Barber</td>
            <td>akbar@email.com</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  {{-- About Us --}}
  <section class="wb-section">
    <p class="eyebrow">Our story</p>
    <h3>About Us</h3>
    <div class="wb-about">
      <p>WeBarber is the ultimate destination to reclaim your confidence when other barbers have missed the mark. We deliver a top-tier grooming experience that is precise, comfortable, and built on a foundation of trust with every client.</p>
      <p>Backed by experienced barbers, strictly hygienic tools, and personalized style consultations before every cut, we help you achieve a flawless look tailored to your unique character and lifestyle.</p>
      <p>Whether you want a classic look or modern looking, we offer a full range of premium grooming services all provided in a relaxed yet professional environment.</p>
    </div>
  </section>

</main>
@push('scripts')
<script>
  const cards     = document.querySelectorAll('.svc-card');
  const summaryEl = document.getElementById('svc-summary');
  const totalEl   = document.getElementById('svc-total');
  const durEl     = document.getElementById('svc-dur');

  function formatRp(n) {
    return 'Rp ' + n.toLocaleString('id-ID');
  }

  function updateSummary() {
    let total = 0, mins = 0, count = 0;
    cards.forEach(card => {
      if (card.querySelector('.svc-check').checked) {
        total += parseFloat(card.dataset.price);
        mins  += parseInt(card.dataset.duration);
        count++;
      }
    });
    if (count > 0) {
      totalEl.textContent = formatRp(total);
      durEl.textContent   = '± ' + mins + ' min';
      summaryEl.style.display = 'inline';
    } else {
      summaryEl.style.display = 'none';
    }
  }

  function applyStyle(card, checked) {
    const tick     = card.querySelector('.svc-tick');
    const nameEl   = card.querySelector('.svc-name');
    const priceEl  = card.querySelector('.svc-price');
    const descEl   = card.querySelector('.svc-desc');
    const durLabel = card.querySelector('.svc-dur-label');
    const hintEl   = card.querySelector('.svc-hint');

    if (checked) {
      card.style.background   = '#0a0a0a';
      card.style.borderColor  = '#0a0a0a';
      card.style.boxShadow    = '0 4px 16px rgba(0,0,0,.18)';
      card.style.transform    = 'translateY(-2px)';
      tick.style.background   = '#b8a060';
      tick.style.borderColor  = '#b8a060';
      tick.style.color        = '#fff';
      tick.textContent        = '✓';
      nameEl.style.color      = '#fff';
      priceEl.style.color     = '#b8a060';
      if (descEl) descEl.style.color = 'rgba(255,255,255,.5)';
      durLabel.style.color    = 'rgba(255,255,255,.4)';
      hintEl.style.color      = '#b8a060';
      hintEl.textContent      = 'DIPILIH ✓';
    } else {
      card.style.background   = '#fff';
      card.style.borderColor  = '#d2d2d7';
      card.style.boxShadow    = '';
      card.style.transform    = '';
      tick.style.background   = 'transparent';
      tick.style.borderColor  = '#d2d2d7';
      tick.style.color        = 'transparent';
      tick.textContent        = '✓';
      nameEl.style.color      = '#0a0a0a';
      priceEl.style.color     = '#0a0a0a';
      if (descEl) descEl.style.color = '#6e6e73';
      durLabel.style.color    = '#aeaeb2';
      hintEl.style.color      = 'transparent';
      hintEl.textContent      = 'PILIH →';
    }
  }

  cards.forEach(card => {
    const cb = card.querySelector('.svc-check');

    card.addEventListener('mouseenter', () => {
      if (!cb.checked) {
        card.style.borderColor = '#0a0a0a';
        card.querySelector('.svc-hint').style.color = '#6e6e73';
      }
    });
    card.addEventListener('mouseleave', () => {
      if (!cb.checked) {
        card.style.borderColor = '#d2d2d7';
        card.querySelector('.svc-hint').style.color = 'transparent';
      }
    });

    card.addEventListener('click', (e) => {
      // <label> membungkus checkbox; cegah klik ganda dari browser
      e.preventDefault();

      const willCheck = !cb.checked;

      // Kategori single-select: batalkan service lain di kategori yang sama
      if (willCheck && card.dataset.single === '1') {
        cards.forEach(other => {
          if (other !== card && other.dataset.category === card.dataset.category) {
            const otherCb = other.querySelector('.svc-check');
            if (otherCb.checked) {
              otherCb.checked = false;
              applyStyle(other, false);
            }
          }
        });
      }

      cb.checked = willCheck;
      applyStyle(card, cb.checked);
      updateSummary();
    });

    applyStyle(card, cb.checked);
  });

  // Reset button: kembalikan semua kartu ke state unselected
  const resetBtn = document.getElementById('rsvp-reset');
  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      setTimeout(() => {
        cards.forEach(card => {
          card.querySelector('.svc-check').checked = false;
          applyStyle(card, false);
        });
        updateSummary();
      }, 10);
    });
  }

  updateSummary();
</script>
@endpush

@endsection
