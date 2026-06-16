<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Penyet Restu Ibu | Premium & Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* --- RESET & DESIGN VARIABLES --- */
        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        :root {
            --primary: #e67e22;
            --secondary: #c0392b;
            --dark: #2c3e50;
            --light-gold: #f39c12;
            --bg-cream: #fffaf5;
            --text-dark: #333;
        }

        body { font-family: 'Poppins', sans-serif; color: var(--text-dark); background-color: var(--bg-cream); line-height: 1.7; }
        a { text-decoration: none; color: inherit; }
        
        /* --- NAVBAR --- */
        .navbar {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1.2rem 8%; background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000;
            backdrop-filter: blur(5px);
        }
        .logo { font-size: 1.6rem; font-weight: 700; color: var(--secondary); letter-spacing: 1px; }
        .logo span { color: var(--primary); }
        .nav-links { display: flex; gap: 2.5rem; }
        .nav-links a { font-weight: 500; font-size: 1rem; transition: 0.3s; position: relative; }
        .nav-links a::after {
            content: ''; width: 0; height: 2px; background: var(--primary);
            position: absolute; bottom: -5px; left: 0; transition: 0.3s;
        }
        .nav-links a:hover::after { width: 100%; }
        .nav-links a:hover { color: var(--primary); }
        
        .btn-order {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white; padding: 0.6rem 1.6rem; border-radius: 50px;
            font-weight: 600; box-shadow: 0 4px 15px rgba(230, 126, 34, 0.3); transition: 0.3s;
        }
        .btn-order:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(230, 126, 34, 0.5); }

        /* --- HERO / BERANDA BARU (Modern Split Layout) --- */
        .hero {
            display: flex; align-items: center; justify-content: space-between;
            padding: 5rem 8%; min-height: 85vh; gap: 4rem; background: white;
        }
        .hero-text { flex: 1; }
        .hero-text h1 { 
            font-family: 'Playfair Display', serif; font-size: 3.8rem; 
            color: var(--dark); line-height: 1.2; margin-bottom: 1.5rem;
        }
        .hero-text h1 span { color: var(--secondary); font-style: italic; }
        .hero-text p { font-size: 1.1rem; color: #666; margin-bottom: 2.5rem; }
        
        .hero-buttons { display: flex; gap: 1.5rem; }
        .btn-main {
            background-color: var(--secondary); color: white; padding: 1rem 2.5rem;
            border-radius: 8px; font-weight: 600; transition: 0.3s;
        }
        .btn-main:hover { background-color: var(--dark); }
        .btn-sub {
            border: 2px solid var(--primary); color: var(--primary); padding: 1rem 2.5rem;
            border-radius: 8px; font-weight: 600; transition: 0.3s;
        }
        .btn-sub:hover { background-color: var(--primary); color: white; }
        
        .hero-image { flex: 1; display: flex; justify-content: center; position: relative; }
        .hero-image img { 
            width: 100%; max-width: 480px; border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; /* Efek bentuk organik */
            box-shadow: 0 15px 30px rgba(0,0,0,0.15); animation: morph 8s ease-in-out infinite;
        }
        @keyframes morph {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%; }
            100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        }

        /* --- KISAH KAMI (Story Section) --- */
        .story-section { padding: 6rem 8%; display: flex; align-items: center; gap: 5rem; }
        .story-img { flex: 1; }
        .story-img img { width: 100%; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .story-content { flex: 1; }
        .tagline { color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 0.5rem; display: block;}
        .story-content h2 { font-family: 'Playfair Display', serif; font-size: 2.8rem; color: var(--dark); margin-bottom: 1.5rem; }
        .story-content p { color: #555; margin-bottom: 1.5rem; text-align: justify; }

        /* --- MENU SECTION --- */
        .menu-section { padding: 6rem 8%; background-color: white; text-align: center; }
        .section-title { font-family: 'Playfair Display', serif; font-size: 2.8rem; margin-bottom: 3rem; color: var(--dark); }
        .section-title span { color: var(--secondary); }
        .menu-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; }
        .menu-card { background: var(--bg-cream); border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; }
        .menu-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .menu-img { height: 220px; background-size: cover; background-position: center; }
        
        /* Modifikasi pemanggilan gambar pada CSS menggunakan asset() */
        .img-1 { background-image: url("{{ asset('images/menu1.jpg') }}"); }
        .img-2 { background-image: url("{{ asset('images/menu2.jpg') }}"); }
        .img-3 { background-image: url("{{ asset('images/menu3.jpg') }}"); }
        .img-4 { background-image: url("{{ asset('images/menu4.jpg') }}"); }
        .img-5 { background-image: url("{{ asset('images/menu5.jpg') }}"); }
        .img-6 { background-image: url("{{ asset('images/menu6.jpg') }}"); }
        
        .menu-content { padding: 2rem; text-align: left; }
        .menu-content h3 { font-size: 1.4rem; margin-bottom: 0.5rem; color: var(--dark); }
        .menu-content p { font-size: 0.95rem; color: #666; margin-bottom: 1.5rem; height: 50px; }
        .price { font-size: 1.3rem; font-weight: 700; color: var(--secondary); display: block; margin-bottom: 1.5rem; }
        .btn-wa { display: block; text-align: center; background-color: #25D366; color: white; padding: 0.8rem; border-radius: 8px; font-weight: 600; transition: 0.3s; }
        .btn-wa:hover { background-color: #128C7E; }

        /* --- ALAMAT & KONTAK SECTION --- */
        .contact-section { padding: 6rem 8%; display: flex; gap: 4rem; flex-wrap: wrap; }
        .contact-info { flex: 1; min-width: 300px; }
        .contact-info h2 { font-family: 'Playfair Display', serif; font-size: 2.8rem; color: var(--dark); margin-bottom: 2rem; }
        .info-box { display: flex; align-items: flex-start; gap: 1.5rem; margin-bottom: 2rem; }
        .info-box i { font-size: 1.5rem; color: var(--primary); background: white; padding: 1rem; border-radius: 50px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .info-box h3 { font-size: 1.1rem; margin-bottom: 0.3rem; color: var(--dark); }
        .info-box p { color: #666; }
        .contact-map { flex: 1.2; min-width: 300px; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 400px; }

        /* --- FOOTER --- */
        footer { background-color: var(--dark); color: white; padding: 2rem; text-align: center; font-size: 0.9rem; }

        /* --- RESPONSIVE --- */
        @media (max-width: 968px) {
            .hero { flex-direction: column-reverse; text-align: center; padding: 3rem 5%; gap: 2rem;}
            .hero-text h1 { font-size: 2.8rem; }
            .hero-buttons { justify-content: center; }
            .story-section { flex-direction: column; padding: 4rem 5%; gap: 2rem; }
            .contact-section { flex-direction: column; padding: 4rem 5%; }
            .navbar { flex-direction: column; gap: 1rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">RESTU<span>MAMA</span></div>
        <div class="nav-links">
            <a href="#home">Beranda</a>
            <a href="#story">Kisah Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Lokasi</a>
        </div>
        <a href="https://wa.me/6281234567890?text=Halo Restu mama, saya mau pesan makanan" target="_blank" class="btn-order">
            <i class="fab fa-whatsapp"></i> Pesan Sekarang
        </a>
    </nav>

    <header id="home" class="hero">
        <div class="hero-text">
            <span class="tagline">Kuliner Tradisional Indonesia</span>
            <h1>Resep Klasik Ayam Penyet <span>Restu Mama</span></h1>
            <p>Menghadirkan kehangatan masakan Mama  di setiap gigitan. Dibuat dengan ayam pilihan segar dan ulekan sambal korek legendaris yang bikin nagih.</p>
            <div class="hero-buttons">
                <a href="#menu" class="btn-main">Eksplor Menu</a>
                <a href="#story" class="btn-sub">Pelajari Kisah Kami</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero.jpg') }}" alt="Ayam Penyet Restu Mama">
        </div>
    </header>

    <section id="story" class="story-section">
        <div class="story-img">
            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=600&auto=format&fit=crop" alt="Dapur Restu Mama">
        </div>
        <div class="story-content">
            <span class="tagline">Cerita di Balik Rasa</span>
            <h2>Sebuah Doa & Rasa Dari Dapur mama</h2>
            <p>Dimulai pada tahun 2018 dari sebuah dapur kecil sederhana, "Restu Mama" lahir dari keinginan seorang mama untuk menyajikan makanan sehat, lezat, and mengenyangkan bagi keluarganya. Menggunakan racikan rempah tradisional yang diwariskan turun-temurun, masakan ini selalu dirindukan.</p>
            <p>Nama "Restu Mama" dipilih sebagai simbol keikhlasan dan doa restu di setiap hidangan yang kami sajikan. Kami percaya bahwa makanan yang dimasak dengan rasa kasih sayang akan menyampaikan kebahagiaan kepada siapapun yang menikmatinya. Kini, kami ingin membagikan kehangatan rasa tersebut kepada Anda semua.</p>
        </div>
    </section>

    <section id="menu" class="menu-section">
        <h2 class="section-title">Menu <span>Andalan</span></h2>
        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img img-1"></div>
                <div class="menu-content">
                    <h3>Ayam Penyet Original</h3>
                    <p>Ayam ungkep bumbu kuning yang digoreng garing, dipenyet dengan sambal bawang khas.</p>
                    <span class="price">Rp 20.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Ayam%20Penyet%20Original" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-img img-2"></div>
                <div class="menu-content">
                    <h3>Udang saus padang</h3>
                    <p>Udang rebus dengan bumbu saus padang pedas, dipadukan dengan sambal terasi ulek.</p>
                    <span class="price">Rp 27.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Udang%20Saus%20Padang" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-img img-3"></div>
                <div class="menu-content">
                    <h3>Nila pecak Penyet</h3>
                    <p>Paket ekonomis nila bakar dengan sambal korek pedas.</p>
                    <span class="price">Rp 55.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Nila%20Pecak%20Penyet" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-img img-4"></div>
                <div class="menu-content">
                    <h3>Ayam pecak Penyet</h3>
                    <p>Paket ekonomis ayam geprek dengan sambal korek pedas.</p>
                    <span class="price">Rp 25.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Ayam%20Pecak%20Penyet" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-img img-5"></div>
                <div class="menu-content">
                    <h3>Cumi saus padang</h3>
                    <p>Paket ekonomis cumi dengan sambal saus padang pedas.</p>
                    <span class="price">Rp 35.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Cumi%20Saus%20Padang" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-img img-6"></div>
                <div class="menu-content">
                    <h3>Gurame pecak Penyet</h3>
                    <p>Paket ekonomis gurame bakar dengan sambal korek pedas.</p>
                    <span class="price">Rp 65.000</span>
                    <a href="https://wa.me/6283873015833?text=Saya%20mau%20pesan%20Gurame%20Pecak%20Penyet" class="btn-wa" target="_blank">Pesan Lewat WA</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-info">
            <h2>Kunjungi <span>Warung Kami</span></h2>
            
            <div class="info-box">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>Alamat Rumah Makan</h3>
                    <p>Jl. Karya Wisata Pasar Johor No. 1, Medan Johor (Samping Alfamart)</p>
                </div>
            </div>

            <div class="info-box">
                <i class="fas fa-clock"></i>
                <div>
                    <h3>Jam Operasional</h3>
                    <p>Setiap Hari: 18.00 WIB - 02.30 WIB</p>
                </div>
            </div>

            <div class="info-box">
                <i class="fas fa-phone"></i>
                <div>
                    <h3>Kontak & Delivery</h3>
                    <p>WhatsApp:  0838-7301-5833<br>Email: halo@ayampenyetrestuibu.com</p>
                </div>
            </div>
        </div>
        
        <div class="contact-map">
            <iframe src="https://maps.google.com/maps?q=Jl.%20Karya%20Wisata%20Pasar%20Johor%20No.%201,%20Medan%20Johor&t=&z=15&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <footer>
        <p>© 2026 Ayam Penyet Restu mama. Dibuat dengan Rasa Bangga & Kasih Sayang.</p>
    </footer>

</body>
</html>