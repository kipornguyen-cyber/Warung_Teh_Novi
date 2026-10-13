<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Warung Teh Nopi — ayam geprek, masakan rumahan, sambal segar, dan menu hemat.">
<title>Warung Teh Nopi — Ayam Geprek</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="top">🍚 Masakan rumahan <span>•</span> 🌶️ Sambal segar <span>•</span> 💛 Harga bersahabat</div>
<header><div class="wrap navwrap">
<a class="logo" href="#beranda"><span>🍚🌶️🍗</span><b>Warung <i>Teh Nopi</i></b></a>
<button class="hamb" id="hamb" aria-label="Menu">☰</button>
<nav id="nav"><a class="active" href="#beranda">Beranda</a><a href="#menu">Menu</a><a href="#tentang">Tentang Kami</a><a href="#testimoni">Testimoni</a><a href="#lokasi">Lokasi</a><a class="order" href="https://wa.me/6281234567890?text=Halo%20Warung%20Teh%20Nopi%2C%20saya%20mau%20pesan." target="_blank">💬 Pesan Sekarang</a></nav>
</div></header>
<main>
<section class="hero" id="beranda"><div class="wrap hero-grid">
<div class="hero-copy reveal"><small>AYAM GEPREK • MASAKAN RUMAHAN</small><h1>Pedasnya Nagih,<br><em>Harganya Bersahabat.</em></h1><p>Ayam geprek renyah, sambal ulek segar, dan menu rumahan yang bikin makan siang jadi lebih mantap.</p><div class="actions"><a class="btn red" href="#menu">Lihat Menu →</a><a class="btn line" href="https://wa.me/6281234567890?text=Halo%20Warung%20Teh%20Nopi" target="_blank">Chat WhatsApp</a></div><div class="points"><span><b>01</b>Bahan segar<br>setiap hari</span><span><b>02</b>Rasa rumahan<br>yang autentik</span><span><b>03</b>Harga hemat<br>untuk semua</span></div></div>
<div class="hero-food reveal"><div class="yellowblob"></div><div class="note">Ayam Geprek<br><b>Spesial!</b></div><div class="plate"><span class="rice">🍚</span><span class="chick c1">🍗</span><span class="chick c2">🍗</span><span class="sambal">🌶️</span><span class="veg">🥒</span></div><div class="price"><small>Mulai dari</small><b>Rp 11K</b></div></div>
</div></section>

<section class="section menu" id="menu"><div class="wrap"><div class="heading reveal"><small>PILIHAN FAVORIT</small><h2>Menu <em>Andalan</em> Kami</h2><p>Menu sederhana, dibuat hangat, dengan rasa yang bikin ingin balik lagi.</p></div>
<div class="filters"><button class="active" data-filter="all">Semua</button><button data-filter="nasi">Menu Nasi</button><button data-filter="indomie">Indomie</button><button data-filter="minuman">Minuman</button></div>
<div class="cards">
<article class="card reveal" data-cat="nasi"><div class="food f1">🍗🌶️</div><h3>Ayam Geprek</h3><p>Ayam goreng, sambal segar, tanpa nasi.</p><strong>Rp 11.000</strong></article>
<article class="card reveal" data-cat="nasi"><div class="food f2">🍗🍚🥒</div><h3>Ayam + Nasi</h3><p>Ayam goreng, nasi hangat, sambal, lalapan.</p><strong>Rp 15.000</strong></article>
<article class="card reveal" data-cat="nasi"><div class="food f3">🍳🍚🌶️</div><h3>Telor + Nasi</h3><p>Telor dadar, nasi hangat, sambal, lalapan.</p><strong>Rp 10.000</strong></article>
<article class="card reveal" data-cat="indomie"><div class="food f4">🍜🥬</div><h3>Indomie + Telor</h3><p>Indomie, telor, sayuran segar.</p><strong>Rp 10.000</strong></article>
<article class="card reveal" data-cat="indomie"><div class="food f4">🍜</div><h3>Indomie Aja</h3><p>Indomie polos, tanpa telor.</p><strong>Rp 7.000</strong></article>
<article class="card reveal" data-cat="minuman"><div class="food f5">🧋🧊</div><h3>Jasjus (Teh Jus)</h3><p>Teh manis dingin, segar.</p><strong>Rp 3.000</strong></article>
<article class="card reveal" data-cat="minuman"><div class="food f6">🥤🧊</div><h3>Es Kopi</h3><p>Kopi hitam dingin, creamy.</p><strong>Rp 5.000</strong></article>
<article class="card favorite reveal" data-cat="nasi"><div class="food f7">🍗🌶️🔥</div><h3>Geprek Sambal Brutal</h3><p>Ayam crispy dengan sambal ekstra pedas.</p><strong>Rp 16.000</strong></article>
</div></div></section>

<section class="section story" id="tentang"><div class="wrap story-grid"><div class="poster reveal"><div>🍗</div><b>Rasa sederhana,<br><em>penuh cinta.</em> ♥</b><small>EST. 2024</small></div><div class="reveal"><small class="kicker">TENTANG KAMI</small><h2>Dari dapur kecil,<br><em>untuk perut yang lapar.</em></h2><p>Warung Teh Nopi hadir untuk menyajikan makanan yang sederhana, enak, dan tetap ramah di kantong. Kami percaya makan enak tidak harus mahal.</p><ul><li>✓ <span><b>Masak fresh setiap hari</b><br>Pesanan dibuat setelah masuk agar tetap hangat.</span></li><li>✓ <span><b>Sambal ulek sendiri</b><br>Level pedas bisa disesuaikan dengan selera.</span></li><li>✓ <span><b>Harga bersahabat</b><br>Cocok untuk mahasiswa, pekerja, dan keluarga.</span></li></ul></div></div></section>

<section class="section why"><div class="wrap"><div class="heading light reveal"><small>KENAPA KAMI?</small><h2>Enak, <em>Murah,</em> Bersahabat.</h2><p>Yang penting kenyang. Yang lebih penting, pulang dengan senyum.</p></div><div class="whygrid"><div>🌶️<h3>Sambal Segar</h3><p>Pedas gurih dibuat saat dibutuhkan.</p></div><div>🍗<h3>Ayam Crispy</h3><p>Gurih di luar, juicy di dalam.</p></div><div>💸<h3>Harga Hemat</h3><p>Mulai Rp 3 ribuan untuk minuman.</p></div><div>🏠<h3>Rasa Rumahan</h3><p>Menu familiar yang bikin nyaman.</p></div></div></div></section>

<section class="section testi" id="testimoni"><div class="wrap"><div class="heading reveal"><small>KATA MEREKA</small><h2>Sudah coba, <em>balik lagi.</em></h2></div><div class="quotes"><figure><b>★★★★★</b><blockquote>“Ayamnya crispy, sambalnya mantap. Porsi pas banget buat makan siang.”</blockquote><figcaption>— Raka, pelanggan</figcaption></figure><figure><b>★★★★★</b><blockquote>“Harganya mahasiswa banget. Indomie + telor jadi menu andalan kalau lagi hemat.”</blockquote><figcaption>— Nisa, pelanggan</figcaption></figure><figure><b>★★★★★</b><blockquote>“Es kopinya enak dan tempatnya berasa kayak makan di rumah sendiri.”</blockquote><figcaption>— Dimas, pelanggan</figcaption></figure></div></div></section>

<section class="section location" id="lokasi"><div class="wrap locationbox reveal"><div><small>MAMPIR, YUK!</small><h2>Datang lapar,<br><em>pulang kenyang.</em></h2><p>📍 Jl. Contoh No. 12, Kota Anda</p><p>🕘 Setiap hari • 09.00 — 21.00 WIB</p><a class="btn red" href="https://maps.google.com/?q=Warung%20Teh%20Nopi" target="_blank">Buka Google Maps →</a></div><div class="map">📍<span>Warung Teh Nopi</span><small>Lokasi warung</small></div></div></section>
</main>
<footer><div class="wrap footgrid"><div><div class="logo"><span>🍚🌶️🍗</span><b>Warung <i>Teh Nopi</i></b></div><p>Masakan rumahan, sambal bikin nagih — makan kenyang, kantong tetap aman.</p></div><div><h4>Menu Cepat</h4><a href="#beranda">Beranda</a><a href="#menu">Menu</a><a href="#tentang">Tentang Kami</a><a href="#lokasi">Lokasi</a></div><div><h4>Hubungi Kami</h4><a href="https://wa.me/6281234567890" target="_blank">WhatsApp</a><a href="tel:+6281234567890">0812-3456-7890</a><span>09.00 — 21.00 WIB</span></div><div><h4>Pesan Sekarang</h4><p>Ingin makan tanpa antre? Chat kami untuk cek menu dan pesanan.</p><a class="footbtn" href="https://wa.me/6281234567890?text=Halo%20Warung%20Teh%20Nopi%2C%20saya%20mau%20pesan." target="_blank">💬 Chat WhatsApp</a></div></div><div class="copyright">© {{ date('Y') }} Warung Teh Nopi. Dibuat dengan ❤️ untuk pelanggan lapar.</div></footer>
<a class="floatwa" href="https://wa.me/6281286164975?text=Halo%20Warung%20Teh%20Nopi%2C%20saya%20mau%20pesan." target="_blank">💬</a>
</body></html>
