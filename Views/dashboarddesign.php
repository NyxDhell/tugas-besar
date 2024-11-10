<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>WebAchuuu</title>
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
            color: #272121;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            background-color: whitesmoke;
            color: white;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        body.loaded {
            opacity: 1;
        }

        header {
            margin-top: 0px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: top 0.3s;
        }

        .icon-container {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-left: 10px;
        }

        .icon-link {
            color: whitesmoke;
            font-size: 2em;
            text-decoration: none;
            position: relative;
        }

        .icon-link i {
            transition: color 0.3s;
        }

        .icon-link:hover i {
            color: #FF6A00; 
        }

        #openLogin {
            margin-left: 50px;
            padding: 0.5px 3px;
            background-color: whitesmoke;
            color: #FF6A00;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5%;
            transition: background-color 0.3s;
            font-size: 1.5rem;
        }

        #openLogin:hover {
            background-color: #666;
        }

        :root {
            --white: white;
            --primary: #DD4814;
            --black: #333;
        }

        /* Styling popup kecil */
        .popup {
            position: absolute;
            margin-left: 70%;
            top: 60px;
            width: 300px;
            background-color: var(--white);
            border: 1px solid var(--primary);
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: none; /* Disembunyikan awalnya */
            z-index: 10;
        }

        .popup h3 {
            color: var(--primary);
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }

        .popup p {
            font-size: 14px;
            color: var(--black);
            margin-bottom: 10px;
            text-align: center;
        }

        .popup form {
            display: flex;
            flex-direction: column;
        }

        .popup .input-box {
            position: relative;
            margin-bottom: 10px;
        }

        .popup .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid var(--primary);
            border-radius: 5px;
            outline: none;
        }

        .popup button {
            padding: 10px;
            font-size: 16px;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .popup .register-link {
            font-size: 14px;
            color: var(--primary);
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            text-decoration: underline;
        }

        .logo {
            font-size: 3rem;
            color: #FF6A00;
            font-weight: 800;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        nav {
            display: flex;
            position: relative;
        }

        nav a {
            font-size: 1.8rem;
            color: gray;
            margin-left: 4rem;
            font-weight: 500;
            transition: 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover,
        nav a.active {
            color: #FF6A00;
        }

        nav .underline {
            position: absolute;
            bottom: 10px;
            left: 0;
            height: 3px;
            background-color: #FF6A00;
            transition: left 0.3s ease;
        }

        section {
            min-height: 50vh;
            padding: 5rem 9%;
            margin-top: 1rem;
            background-color: whitesmoke;
        }

        .home {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5rem;
            background-color: whitesmoke;
            padding: 0rem 0;
            font-size: 30px;
            color: #272121;
        }

        .highlight {
            color: #FF6A00;
            font-weight: bold;
        }

        .welcome-message {
            text-align: center;
            background-color: transparent;
            padding: 2rem;
            margin-top: 0%;
        }

        .welcome-message p {
            font-size: 15px;
            margin-left: 1rem;
            margin-right: 1rem;
            margin-top: 3rem;
            text-align: justify;
        }

        .welcome-message p {
            font-size: 15px;
            margin-left: 10rem;
            margin-right: 10rem;
            margin-top: 3rem;
            text-justify: center;
        }

        .search-box-container {
            display: flex;
            margin-top: 10rem;
            justify-content: center;
            background-color: whitesmoke;
            padding: 2rem;
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
            height: 30px;
            display: flex;
            cursor: pointer;
            padding: 20px;
            background-color: gray;
            border-radius: 50px;
            align-items: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .search-box:hover input {
            width: 500px;
            padding: 20px;
        }

        .search-box input {
            width: 0;
            outline: none;
            border: none;
            font-weight: 500;
            transition: 0.8s;
            background: transparent;
        }

        .search-box a .fast {
            color: whitesmoke;
            font-size: 18px;
        }

        .search-box button {
            margin-left: 0.5px;
            align-items: center;
            background-color: transparent;
            border-color: white;
            border-radius: 70rem;
            cursor: pointer;
            color: white;
            font-size: 1.5rem;
        }

        .search-box button:hover {
            color: #FF6A00;
        }

        .highlight-search {
            background-color: yellow;
            font-weight: bold;
        }
        :root {
            --x: 0;
            --y: 0;
            --xp: 0;
            --yp: 0;
            --hue: calc(0 + (var(--xp) * 500));
            --bg: hsl(0 0% 10%);
            --size: 100px;
            --glow: radial-gradient(
                    50% 50% at center,
                    hsl(var(--hue) 80% 85%),
                    hsl(var(--hue) 80% 70%),
                    transparent
                )
                calc((var(--x) * 1px) - (var(--size) * 0.5))
                calc((var(--y) * 1px) - (var(--size) * 0.5)) / var(--size) var(--size) no-repeat fixed;
        }

        .button-nav {
            display: flex;
            gap: 1rem;
            justify-content: center;
            padding: 2rem;
            color: white;
        }

        .button-nav button {
            border-radius: 1rem;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 0.1ch;
            background: white;
            border: 4px solid transparent;
            border-radius: 5rem;
            box-shadow: 0 1px gray inset;
            cursor: pointer;
            background:
                linear-gradient(var(--bg), var(--bg)) padding-box,
                var(--glow),
                linear-gradient(gray, gray) border-box;
            transition: background-color 0.3s, color 0.3s;
            background-color: white;
            touch-action: none;
            position: relative;
            padding: 1rem 2rem;
        }

        .button-nav button::before {
            content: "";
            position: absolute;
            inset: 0;
            box-shadow: 0 1px gray inset;
            background: white;
            z-index: 2;
            border-radius: 5rem;
        }

        .button-nav button span {
            background: var(--glow), gray;
            background-clip: text;
            color: inherit;
            height: 100%;
            width: 100%;
            z-index: 2;
            position: relative;
        }

        button:hover {
            background-color: gray;
            color: orange;
        }

        :root:has(.button-nav button:active) {
            --size: 300px;
            background-color: orange;
            color: whitesmoke;
        }

        .button-nav button::after {
            content: "";
            position: absolute;
            inset: -4px;
            filter: blur(20px);
            border: 4px solid transparent;
            background: var(--glow);
            border-radius: 5rem;
        }
        .button-text h3{
            font-size: 15px;
            margin-left: 1rem;
            margin-right: 1rem;
            text-align: center;
            background-color: transparent;
            padding: 2rem;
            font-weight: 300;
        }

        .photo-galery{
            display: flex;
            gap: 20px;
            margin: auto;
            padding: 40px;
            width: 90%;
            max-width: 1224px;
        }
        .column{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .photo img{
            width: 100%;
            height: 100%;
            border-radius: 5px;
            object-fit: cover;
        }

        footer {
            background-color: #f8f9fa;
            padding: 2rem 10%;
            color: #333;
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            border-top: 1px solid #ddd;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 1rem;
        }

        .footer-column h3 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #000;
        }

        .footer-column a {
            display: block;
            color: #666;
            text-decoration: none;
            margin-bottom: 0.5rem;
            font-weight: 400;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: #FF6A00;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            footer {
                flex-direction: column;
                align-items: center;
            }
            .footer-column {
                margin: 1rem 0;
            }
        }
        .goodbye-message {
            padding-top: 5%;
        }
        
    </style>
</head>

<body>
<header id="header">
    <a href="<?= base_url(); ?>" class="logo">GoRemote!</a>
    <nav id="nav">
        <a href="<?= base_url(); ?>" class="<?= (uri_string() == '') ? 'active' : ''; ?>">Home</a>
        <a href="<?= base_url('experience'); ?>" class="<?= (uri_string() == 'experience') ? 'active' : ''; ?>">Term of Service</a>
        <a href="<?= base_url('about'); ?>" class="<?= (uri_string() == 'about') ? 'active' : ''; ?>">Contact</a>
        <div class="underline"></div>
        
        <!-- Notification and Message Icons -->
        <div class="icon-container">
            <a href="<?= base_url('notifications'); ?>" class="icon-link">
                <i class="fas fa-bell"></i> <!-- Notification Icon -->
            </a>
            <a href="<?= base_url('messages'); ?>" class="icon-link">
                <i class="fas fa-envelope"></i> <!-- Message Icon -->
            </a>
        </div>
        <button id="openLogin">Sign In</button>

    <!-- Popup Login -->
    <div class="popup" id="loginPopup">
        <h3>Login</h3>
        <form action="/tugas-besar/public/login" method="post">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <p>Belum memiliki akun? <span class="register-link" id="registerLink">Sign Up</span></p>
            <button type="submit">Login</button>
        </form>
    </div>

    </nav>
</header>
        <div class="search-box-container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Cari...">
                <a href="#">
                    <i class="fas da-search"></i>
                </a>
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="button-nav">
            <button>
                <span>
                <a href="<?= base_url('dashboarddesign'); ?>" class="<?= (uri_string() == 'dashboarddesign') ? 'active' : ''; ?>">Design Graphic</a>
                </span>
            </button>
            <button>
                <span>
                <a href="<?= base_url('dashboardprogram'); ?>" class="<?= (uri_string() == 'dashboardprogram') ? 'active' : ''; ?>">Programming & Tech</a>
                </span>
            </button>
            <button>
                <span>
                <a href="<?= base_url('dashboardvideo'); ?>" class="<?= (uri_string() == 'dashboardvideo') ? 'active' : ''; ?>">Video & Animation</a>
                </span>
            </button><button>
                <span>
                <a href="<?= base_url('dashboardwrite'); ?>" class="<?= (uri_string() == 'dashboardwrite') ? 'active' : ''; ?>">Writting & Translation</a>
                </span>
            </button>
            <button>
                <span>
                <a href="<?= base_url('dashboardmusic'); ?>" class="<?= (uri_string() == 'dashboardmusic') ? 'active' : ''; ?>">Music & Audio</a>
                </span>
            </button>
            <button>
                <span>
                <a href="<?= base_url('dashboardfinance'); ?>" class="<?= (uri_string() == 'dashboardfinance') ? 'active' : ''; ?>">Finance</a>
                </span>
            </button>
        </div>
        <div class="button-text">
            <h3>Explore the job that you are looking for and feel comfortable with.</h3>
        </div>
    <section class="home">
        <div class="welcome-message">
            <h1>Hi, Welcome to<span class="highlight"> GoRemote!</span>,</h1>
            <h1> The Best Place to Find Job Opportunities!</h1>
            <p>At <span class="highlight">GoRemote!</span>, we understand that for fresh graduates, finding your first job can be overwhelming, especially when you're looking for experience in a more advanced field. That's why we offer a platform designed to help you explore various opportunities such as internships, freelancing, and volunteer positions—perfect stepping stones to gain the experience you need.</p>
            <p>Our goal is to simplify your job search and connect you with roles that will provide valuable learning experiences. Whether you're looking for your first professional role or aiming to build a solid foundation for your career, GoRemote! is here to help you navigate your next steps.</p>
            <p>Explore our job listings, find the right opportunities to grow your skills, and take your first step toward a successful career. Join our community today and start gaining the experience you need to advance in your field!</p>
        </div>
        <div class="button-nav">
            <button>
                <span>Get Started</span>
            </button>
        </div>
        <div class="button-text">
            <h1>Design: More to explore.</h1>
        </div>
        <div class="photo-galery">
            <div class="column">
                <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/1.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/2.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/3.jpg" alt="">
                    </div>
            </div>
            <div class="column">
                <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/4.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/5.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/6.jpg" alt="">
                    </div>
            </div>
            <div class="column">
                <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/7.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/8.jpg" alt="">
                    </div>
                    <div class="photo">
                    <img src="http://localhost/tugas-besar/public/img/9.jpg" alt="">
                    </div>
            </div>
        </div>
    </section>
    <footer>
    <div class="footer-column">
    <h3>Design & Graphic</h3>
        <a href="#">Logo Design</a>
        <a href="#">Illustration</a>
        <a href="#">Brand Style Guides</a>
        <a href="#">Infographic Design</a>
        <a href="#">3D Models & Product Design</a>
    </div>

    <div class="footer-column">
        <h3>Programming & Tech</h3>
        <a href="#">Web Development</a>
        <a href="#">Mobile App Development</a>
        <a href="#">Game Development</a>
        <a href="#">Data Analysis & Reports</a>
        <a href="#">Cybersecurity & Data Protection</a>
    </div>

    <div class="footer-column">
        <h3>Video & Animation</h3>
        <a href="#">Video Editing</a>
        <a href="#">Animation & Motion Graphics</a>
        <a href="#">3D Animation</a>
        <a href="#">Product Videos</a>
        <a href="#">Video Production</a>
    </div>

    <div class="footer-column">
        <h3>Writing & Translation</h3>
        <a href="#">Article & Blog Writing</a>
        <a href="#">Technical Writing</a>
        <a href="#">Translation Services</a>
        <a href="#">Creative Writing</a>
        <a href="#">Proofreading & Editing</a>
    </div>
    <div class="footer-column">
        <h3>Company</h3>
        <a href="about">About Us</a>
        <a href="#">Help & Support</a>
        <a href="#">Social Impact</a>
        <a href="#">Careers</a>
        <a href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a>
    </div>

    <div class="footer-column">
        <h3>Music & Audio</h3>
        <a href="#">Voice Over</a>
        <a href="#">Mixing & Mastering</a>
        <a href="#">Podcast Production</a>
        <a href="#">Jingles & Intros</a>
        <a href="#">Sound Design</a>
    </div>

    <div class="footer-column">
        <h3>Finance</h3>
        <a href="#">Financial Consulting</a>
        <a href="#">Business Plans</a>
        <a href="#">Tax Preparation</a>
        <a href="#">Market Research</a>
        <a href="#">Accounting & Bookkeeping</a>
    </div>
    <div class="goodbye-message">
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
    
    </footer>
    

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

    const openLoginBtn = document.getElementById('openLogin');
        const loginPopup = document.getElementById('loginPopup');
        const registerLink = document.getElementById('registerLink');

        // Tampilkan popup saat tombol Sign In diklik
        openLoginBtn.onclick = () => {
            loginPopup.style.display = loginPopup.style.display === 'block' ? 'none' : 'block';
        };

        // Arahkan ke halaman register saat "Sign Up" diklik
        registerLink.onclick = () => {
            window.location.href = '/tugas-besar/public/login';
        };

        // Tutup popup jika area di luar popup diklik
        window.onclick = (event) => {
            if (event.target !== openLoginBtn && event.target !== loginPopup && !loginPopup.contains(event.target)) {
                loginPopup.style.display = 'none';
            }
        };

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
                        heading.innerHTML = heading.innerHTML.replace(regex, (match) => `<span class="highlight-search">${match}</span>`);
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
    const syncPointer = ({ x: pointerX, y: pointerY }) => {
            const x = pointerX.toFixed(2);
            const y = pointerY.toFixed(2);
            const xp = (pointerX / window.innerWidth).toFixed(2);
            const yp = (pointerY / window.innerHeight).toFixed(2);
            document.documentElement.style.setProperty('--x', x);
            document.documentElement.style.setProperty('--xp', xp);
            document.documentElement.style.setProperty('--y', y);
            document.documentElement.style.setProperty('--yp', yp);
            document.documentElement.style.setProperty('--hue', '15');
        };
        document.body.addEventListener('pointermove', syncPointer);
</script>
</body>

</html>
