<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#321b10">
    <meta name="description" content="Menu rumahan Warung Teh Nopi: ayam geprek dan penyet, nasi, Indomie, serta minuman segar dengan harga bersahabat.">
    <title>Warung Teh Nopi — Makan Enak, Harga Bersahabat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="hero" id="beranda">
        <div class="hero-grain"></div>
        <div class="hero-inner">
            <a class="brand" href="#beranda" aria-label="Warung Teh Nopi, beranda">
                <span class="brand-mark" aria-hidden="true">🍚🌶️🍗</span>
                <span class="brand-name">Warung <b>Teh Nopi</b></span>
            </a>
            <p class="hero-eyebrow"><span></span> AYAM GEPREK &amp; AYAM PENYET <span></span></p>
            <h1>Enak, murah,<br><em>bersahabat.</em></h1>
            <p class="hero-copy">Makan kenyang, kantong tetap aman.<br>Dimasak hangat, disajikan sepenuh hati.</p>
            <a class="hero-cta" href="#menu">Lihat menu <span aria-hidden="true">↓</span></a>
            <div class="hero-stamp" aria-hidden="true"><span>RASA<br>RUMAHAN</span><b>♡</b></div>
        </div>
        <div class="hero-scallop" aria-hidden="true"></div>
    </header>

    <main>
        <section class="menu-section" id="menu" aria-labelledby="menu-title">
            <div class="section-heading">
                <span class="section-kicker">DARI DAPUR KAMI</span>
                <h2 id="menu-title">Pilih yang <em>kamu suka</em></h2>
                <p>Menu sederhana, dibuat hangat untuk nemenin harimu.</p>
            </div>

            <div class="menu-groups">
                <section class="menu-group" aria-labelledby="nasi-title">
                    <div class="group-heading"><span class="group-icon">🍚</span><div><h3 id="nasi-title">Menu Nasi</h3><p>Ayam goreng, sambal segar, dan lalapan.</p></div><span class="group-rule"></span></div>
                    <div class="menu-list">
                        <article class="menu-card">
                            <div class="dish-photo dish-chicken"><img src="{{ asset('images/ayam-goreng.jpg') }}" alt="Ayam goreng crispy dengan sambal" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Ayam Aja</h4><p>Ayam goreng, sambal segar, tanpa nasi</p><span class="dish-tag">FAVORIT WARUNG</span></div>
                            <strong class="price">Rp 11.000</strong>
                        </article>
                        <article class="menu-card">
                            <div class="dish-photo dish-rice"><img src="{{ asset('images/ayam-goreng.jpg') }}" alt="Ayam goreng untuk teman nasi hangat" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Ayam + Nasi</h4><p>Ayam goreng, nasi hangat, sambal, lalapan</p></div>
                            <strong class="price">Rp 15.000</strong>
                        </article>
                        <article class="menu-card">
                            <div class="dish-photo dish-egg"><img src="{{ asset('images/nasi-telor.jpg') }}" alt="Nasi hangat dengan sayuran" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Telor + Nasi</h4><p>Telor dadar, nasi hangat, sambal, lalapan</p></div>
                            <strong class="price">Rp 10.000</strong>
                        </article>
                    </div>
                </section>

                <section class="menu-group" aria-labelledby="indomie-title">
                    <div class="group-heading"><span class="group-icon">🍜</span><div><h3 id="indomie-title">Indomie</h3><p>Bisa goreng atau rebus, hangat dan mantap.</p></div><span class="group-rule"></span></div>
                    <div class="menu-list">
                        <article class="menu-card">
                            <div class="dish-photo dish-noodle"><img src="{{ asset('images/indomie-telor.jpg') }}" alt="Mi goreng dengan telur ceplok" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Indomie + Telor</h4><p>Indomie, telor, sayuran segar</p></div>
                            <strong class="price">Rp 10.000</strong>
                        </article>
                        <article class="menu-card">
                            <div class="dish-photo dish-simple"><img src="{{ asset('images/indomie-telor.jpg') }}" alt="Mi goreng hangat" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Indomie Aja</h4><p>Indomie polos, tanpa telor</p></div>
                            <strong class="price">Rp 7.000</strong>
                        </article>
                    </div>
                </section>

                <section class="menu-group" aria-labelledby="drink-title">
                    <div class="group-heading"><span class="group-icon">🥤</span><div><h3 id="drink-title">Minuman</h3><p>Penutup segar buat teman makan siang.</p></div><span class="group-rule"></span></div>
                    <div class="menu-list">
                        <article class="menu-card">
                            <div class="dish-photo dish-tea"><img src="{{ asset('images/minuman.jpg') }}" alt="Teh manis dingin dengan es" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Jasjus (Teh Jus)</h4><p>Teh manis dingin, segar</p></div>
                            <strong class="price">Rp 3.000</strong>
                        </article>
                        <article class="menu-card">
                            <div class="dish-photo dish-coffee"><img src="{{ asset('images/es-kopi.jpg') }}" alt="Es kopi susu" loading="lazy" decoding="async"></div>
                            <div class="dish-info"><h4>Es Kopi</h4><p>Kopi hitam dingin</p></div>
                            <strong class="price">Rp 5.000</strong>
                        </article>
                    </div>
                </section>
            </div>
        </section>

        <section class="visit" id="kunjungi">
            <div class="visit-doodle" aria-hidden="true">♡</div>
            <div class="visit-inner">
                <span class="section-kicker">LAGI LAPAR?</span>
                <h2>Yuk, mampir<br><em>ke Warung Teh Nopi.</em></h2>
                <p>Warung buka setiap hari<br><b>10.00 – 21.00 WIB</b></p>
                <a class="whatsapp" href="https://wa.me/6281286164975?text=Halo%20Warung%20Teh%20Nopi%2C%20saya%20mau%20pesan." target="_blank" rel="noopener noreferrer"><span aria-hidden="true">☏</span> Pesan lewat WhatsApp</a>
                <small>Hubungi 0812 8616 4975</small>
            </div>
            <div class="visit-pattern" aria-hidden="true">🍃</div>
        </section>
    </main>

    <footer>
        <a class="footer-brand" href="#beranda">🍚 <span>Warung <b>Teh Nopi</b></span></a>
        <p>Masakan rumahan, sambal bikin nagih — makan kenyang, kantong tetap aman.</p>
        <small>© {{ date('Y') }} Warung Teh Nopi · Foto ilustrasi dari Unsplash, sajian bisa berbeda ♡</small>
    </footer>

    <a class="floating-order" href="https://wa.me/6281286164975?text=Halo%20Warung%20Teh%20Nopi%2C%20saya%20mau%20pesan." aria-label="Pesan Warung Teh Nopi lewat WhatsApp" target="_blank" rel="noopener noreferrer"><span aria-hidden="true">☏</span><b>Pesan</b></a>
</body>
</html>
