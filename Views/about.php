<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? base_url('.../public/css/about.css');?>">
    <title>About Me - Portofolio Website</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            background-color: #272121;
            color: white;
        }

        header {
            margin-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background-color: transparent;
            filter: drop-shadow(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: top 0.3s;
        }

        .logo {
            font-size: 3rem;
            color: #DD4814;
            font-weight: 800;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        nav {
            display: flex;
            position: relative; /* Tambahkan posisi relatif pada nav */
        }

        nav a {
            font-size: 1.8rem;
            color: white;
            margin-left: 4rem;
            font-weight: 500;
            transition: color 0.3s ease, border-bottom 0.3s ease, font-weight 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover,
        nav a.active {
            color: #DD4814;
        }
        nav .underline {
            position: absolute;
            bottom: -10px; /* Sesuaikan posisi garis */
            left: 0; /* Menyelaraskan garis dengan link */
            height: 3px; /* Ketebalan garis */
            background-color: #DD4814; /* Warna garis */
            transition: left 0.3s ease; /* Transisi untuk pergerakan garis */
        }

        @media(max-width:995px) {
            nav {
                position: absolute;
                display: none;
                top: 0;
                right: 0;
                width: 40%;
                border-left: 3px solid #DD4814;
                border-bottom: 3px solid #DD4814;
                border-bottom-left-radius: 2rem;
                padding: 1rem;
                background-color: #DD4814;
                border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
            }

            nav.active {
                display: block;
            }

            nav a {
                display: block;
                font-size: 2rem;
                margin: 3rem 0;
            }

            nav a:hover,
            nav a.active {
                padding: 1rem;
                border-radius: 0.5rem;
                border-bottom: 0.5rem solid #DD4814;
            }
        }

        /* Gaya untuk batang foto */
        .photo-bar {
            display: inline-flex;
            justify-content: space-around;
            align-items: center;
            margin: 5rem 0; /* Menjaga jarak antara header dan batang foto */
            padding: 2em;
            gap: 2rem;
            background-color: transparent; /* Warna latar belakang untuk batang */
        }

        .photo-bar img {
            width: 70%; /* Atur lebar gambar */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5); /* Shadow effect */
            transition: transform 0.3s;
            outline: 5px #443737;
        }

        .photo-bar img:hover {
            transform: scale(1.10); /* Zoom effect saat hover */
        }
        .photo-item {
            margin-top: 0.5rem;
            text-align: center; /* Pusatkan teks di bawah gambar */
        }

        .photo-item p {
            margin-top: auto;
            font-size: 1rem; /* Ukuran font untuk teks */
            color: white; /* Warna teks */
        }


        section {
            min-height: 100vh;
            padding: 5rem 9% 5rem;
            margin-top: 10rem; /* Untuk memberi ruang di bawah header tetap */
        }

        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8rem;
            background-color: #443737;
        }

        .home .home-content h1 {
            font-size: 6rem;
            font-weight: 700;
            line-height: 1.3;
        }

        span {
            color: #DD4814;
        }

        .home-content h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .home-content p {
            font-size: 1.6rem;
        }

        .home-img {
            border-radius: 50%;
        }

        .home-img img {
            position: relative;
            width: 32vw;
            border-radius: 50%;
            box-shadow: 0 0 25px solid #DD4814;
            cursor: pointer;
            transition: 0.2s linear;
        }

        .home-img img:hover {
            font-size: 1.8rem;
            font-weight: 500;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background-color: transparent;
            border: 0.2rem solid #DD4814;
            font-size: 2rem;
            border-radius: 50%;
            margin: 3rem 1.5rem 3rem 0;
            transition: 0.3s ease;
            color: #DD4814;
        }

        .social-icons a:hover {
            color: #443737;
            transform: scale(1.3) translateY(-5px);
            background-color: #DD4814;
            box-shadow: 0 0 25px #DD4814;
        }

        .social-icons-self a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background-color: transparent;
            border: 0.2rem solid #DD4814;
            font-size: 2rem;
            border-radius: 70%;
            margin: 1.5rem 1.5rem 1.5rem 1.5rem;
            transition: 0.3s ease;
            color: #DD4814;
        }

        .social-icons-self a:hover {
            color: #443737;
            transform: scale(1.3) translateY(-5px);
            background-color: #DD4814;
            box-shadow: 0 0 25px #DD4814;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            background-color: #443737;
            border-radius: 4rem;
            font-size: 1.6rem;
            color: #DD4814;
            letter-spacing: 0.3rem;
            font-weight: 600;
            border: 2px solid #DD4814;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: scale3d(1.03);
            background-color: #DD4814;
            color: #454545;
            box-shadow: 0 0 25px #DD4814;
        }

        .search-box {
            display: flex;
            align-items: center;
            margin-left: 1rem; /* Spasi antara navigasi dan pencarian */
        }

        .search-box input {
            padding: 1rem;
            border: 4px solid #DD4814;
            border-radius: 20px;
            background-color: transparent;
            color: white;
            width: 250px;
            transition: border-color 1s ease;
        }

        .search-box input::placeholder {
            color: #DD4814; /* Warna placeholder */
        }

        .search-box input:focus {
            border-color: #FF6A00; /* Ubah warna border saat fokus */
        }

        .search-box button {
            margin-left: 3rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: #DD4814;
            font-size: 2rem;
        }

        .search-box button:hover {
            color: #FF6A00; /* Ubah warna saat hover */
        }

        .highlight {
            background-color: yellow; /* Warna latar belakang untuk highlight */
            font-weight: bold; /* Mengubah ketebalan font */
        }

        @media (max-width: 1000px) {
            .home {
                gap: 4rem;
            }
        }

        @media(max-width:995px) {
            .home {
                flex-direction: column;
                margin: 5rem 4rem;
            }

            .home .home-content h3 {
                font-size: 2.5rem;
            }

            .home-content h1 {
                font-size: 5rem;
            }

            .home-img img {
                width: 70vw;
                margin-top: 4rem;
            }
        }
    </style>
</head>

<body>
    <header id="header">
        <a href="<?= base_url(); ?>" class="logo">WebAchuuu:p</a>

        <nav id="nav">
            <a href="<?= base_url(); ?>" class="<?= (uri_string() == '') ? 'active' : ''; ?>">Home</a>
            <a href="<?= base_url('volunteer'); ?>" class="<?= (uri_string() == 'volunteer') ? 'active' : ''; ?>">Volunteer</a>
            <a href="<?= base_url('iternship'); ?>" class="<?= (uri_string() == 'iternship') ? 'active' : ''; ?>">Iternship</a>
            <a href="<?= base_url('freelancer'); ?>" class="<?= (uri_string() == 'freelancer') ? 'active' : ''; ?>">Freelancer</a>
            <a href="<?= base_url('work'); ?>" class="<?= (uri_string() == 'work') ? 'active' : ''; ?>">Work</a>
            <a href="<?= base_url('psytest'); ?>" class="<?= (uri_string() == 'psytest') ? 'active' : ''; ?>">Psycotest</a>
            <a href="<?= base_url('experience'); ?>" class="<?= (uri_string() == 'experience') ? 'active' : ''; ?>">Term of Service</a>
            <a href="<?= base_url('about'); ?>" class="<?= (uri_string() == 'about') ? 'active' : ''; ?>">Contact</a>
            <div class="underline"></div>
        </nav>
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari...">
            <button id="searchBtn"><i class="fas fa-search"></i></button>
        </div>
    </header>

    <!-- Batang Foto -->
    

    <section class="home">
        <div class="photo-bar">
        <div class="photo-item">
            <img src="http://localhost/tugas-besar/public/img/fadhel.jpg" alt="Foto 1">
            <p></p>
            <h1>Fadhel.</h1>
            <div class="social-icons-self">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="https://drive.google.com/file/d/1n-n9TTwj1mDVKC2kLZK7Cr8FE0GtxBMt/view" class="btn">Download CV</a>
        </div>
        <div class="photo-item">
            <img src="http://localhost/tugas-besar/public/img/fadhel.jpg" alt="Foto 2">
            <p></p>
            <h1>Putri.</h1>
            <div class="social-icons-self">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="photo-item">
            <img src="http://localhost/tugas-besar/public/img/fadhel.jpg" alt="Foto 3">
            <p></p>
            <h1>Daffa.</h1>
            <div class="social-icons-self">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        </div>
        <div class="home-content">
            <h1>About Us</h1>
            <h3>we're <span>Kelompok3</span></h3>
            <p>
            Discover the world of web development with insights, tutorials, and resources crafted to help you build and optimize modern, responsive websites. Whether you're a beginner taking your first steps or a seasoned developer looking to refine your skills, our content covers everything from front-end design to back-end programming and best practices. Join us to stay updated with the latest trends, tools, and techniques in web development. Let's create something amazing together!
            </p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="#" class="btn">Follow Us</a>
        </div>
    </section>

    <script>
        let lastScrollTop = 0;
        const header = document.getElementById("header");

        window.addEventListener("scroll", function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                header.style.top = "-100px"; // Hide header
            } else {
                // Scrolling up
                header.style.top = "0"; // Show header
            }
            lastScrollTop = scrollTop;
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.body.classList.add('loaded'); // Menambahkan kelas untuk efek fade-in

            document.getElementById('searchBtn').addEventListener('click', function () {
                const query = document.getElementById('searchInput').value.trim();
                const headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6, section p'); // Memperluas selektor
                let found = false;

                // Hapus highlight sebelumnya
                headings.forEach(heading => {
                    heading.innerHTML = heading.textContent; // Reset ke teks asli
                });

                if (query) {
                    const regex = new RegExp(query, 'gi'); // Menggunakan regex untuk pencarian case insensitive

                    headings.forEach(heading => {
                        if (heading.textContent.match(regex)) {
                            heading.innerHTML = heading.innerHTML.replace(regex, (match) => `<span class="highlight">${match}</span>`);
                            found = true;
                        }
                    });

                    if (!found) {
                        alert('Tidak ada hasil ditemukan!');
                    }
                } else {
                    alert('Silakan masukkan kata kunci pencarian!');
                }
            });
        });
    </script>
</body>

</html>
