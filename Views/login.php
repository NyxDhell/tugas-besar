<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

:root{
    --white: white;
    --black: #DD4814; 
    --lightBulue: #17a;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('https://drive.google.com/file/d/13NuqT_Np4WWpcFTDiKZOApBGPyed0taY/view?usp=drive_link') ;
}

.wrapper{
    position: relative;
    width: 750px;
    height: 450px;
    background: rgba(255, 255, 255, 0.2);
    border: 4px solid #DD4814;
    border-radius: 20px;
    box-shadow: 0 0 50px #443737;
    overflow: hidden;
    backdrop-filter: blur(5px);
}


.wrapper .form-box{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
}

.form-box h2{
    margin-bottom: 10px;
    position: relative;
    font-size: 32px;
    color: #DD4814;
    text-align: center;
}

.form-box h2::after{
    content: "";
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 4px;
    background: var(--black);
}

.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 25px 0;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    color: var(--black);
    font-size: 16px;
    font-weight: 500;
    border: none;
    outline: none;
    border-bottom: 2px solid var(--black);
    transition: .5s;
    padding-right: 23px;
}

.input-box input:focus,
.input-box input:valid{
    border-bottom-color: var(--lightBulue);
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: var(--black);
    pointer-events: none;
    transition: 0.5s;
}


.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    color: var(--lightBulue);
}


.input-box i{
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    transition: 0.5s;
}

.input-box input:focus~i,
.input-box input:valid~i{
    color: var(--lightBulue);
}

form button{
    width: 100%;
    height: 45px;
    background-color: var(--black);
    color: var(--white);
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    transition: .3s;
}

form button:hover{
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
}

form .linkTxt{
    font-size: 14px;
    color: var(--black);
    text-align: center;
    margin: 20px 0 10px;
}

.linkTxt p a{
    color: blue;
    text-decoration: none;
    font-weight: 600;
}

.wrapper .form-box.login .animation{
    transform: translateX(0);
    transition: 0.7s ease;
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--j));
}


.wrapper.active .form-box.login .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition-delay: calc(.1s * var(--i));
}






.wrapper .info-text{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.wrapper .info-text.login{
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px;

}

.wrapper .info-text h2{
    font-size: 36px;
    color: var(--white);
    line-height: 1.3;
    text-transform: uppercase;
}

.wrapper .info-text p{
    font-size: 16px;
    color: var(--white);
}


.wrapper .info-text.login .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition: 0.7s ease;
    transition-delay: calc(.1s * var(--j));
}
.wrapper.active .info-text.login .animation{
    transform: translateX(120px);
    opacity: 0;
    filter: blur(10px);
    transition: 0.7s ease;
    transition-delay: calc(.1s * var(--i));
}





.wrapper .rotate-bg{
    position: absolute;
    top: -4px;
    right: 0;
    width: 850px;
    height: 600px;
    background: #DD4814;
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
    transition: 1.5s ease;
    transition-delay: 1.6s;
}

.wrapper.active .rotate-bg{
    transform: rotate(0) skewY(0);
    transition-delay: 0.5s;
}











.wrapper .form-box.register{
    padding: 0 40px 0 60px;
    right: 0;
}

.wrapper.active .form-box.register{
    pointer-events: auto;
}


.wrapper .form-box.register .animation{
    transform: translateX(120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}

.wrapper.active .form-box.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
}



.wrapper .info-text.register{
    left: 0;
    text-align: left;
    padding: 0 150px 60px 40px;
    pointer-events: none;
}

.wrapper.active .info-text.register{
    pointer-events: auto;
}


.wrapper .info-text.register .animation{
    transform: translateX(-120%);
    opacity: 0;
    filter: blur(10px);
    transition: .7s ease;
    transition-delay: calc(.1s * var(--j));
}

.wrapper.active .info-text.register .animation{
    transform: translateX(0);
    opacity: 1;
    filter: blur(0);
    transition-delay: calc(.1s * var(--i));
}




.wrapper .rotate-bg2{
    position: absolute;
    top: 100%;
    left: 250px;
    width: 850px;
    height: 700px;
    background: var(--white);
    transform: rotate(0) skewY(0);
    transform-origin: bottom left;
    transition: 1.5s ease;
    transition-delay: 0.5s;
}

.wrapper.active .rotate-bg2{
    transform: rotate(-11deg) skewY(-40deg);
    transition-delay: 1.2s;
}
</style>
</head>
<body>
    <div class="wrapper">
        <span class="rotate-bg"></span>
        <span class="rotate-bg2"></span>

    <div class="form-box login">
        <h2 class="title animation" style="--i:0; --j:21">Login</h2>
        <form action="/tugas-besar/public/login" method="post"> <!-- Ensure this points to the correct route -->
            <div class="input-box animation" style="--i:1; --j:22">
                <input type="text" name="username" required> <!-- Name attribute is important -->
                <label for="">Username</label>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box animation" style="--i:2; --j:23">
                <input type="password" name="password" required> <!-- Name attribute is important -->
                <label for="">Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
    <button type="submit" class="btn animation" style="--i:3; --j:24">Login</button>
    <div class="linkTxt animation" style="--i:5; --j:25">
        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
    </div>
    </form>

    </div>

    <div class="info-text login">
        <h2 class="animation" style="--i:0; --j:20">Welcome Back!</h2>
        <p class="animation" style="--i:1; --j:21">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deleniti,rem?</p>
    </div>







        <div class="form-box register">

            <h2 class="title animation" style="--i:17; --j:0">Sign Up</h2>

            <form action="#">

                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text" required>
                    <label for="">Username</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="email" required>
                    <label for="">Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="password" required>
                    <label for="">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn animation" style="--i:21;--j:4">Sign Up</button>

                <div class="linkTxt animation" style="--i:22; --j:5">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>

            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome Back!</h2>
            <p class="animation" style="--i:18; --j:1;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deleniti,rem?</p>
        </div>

    </div>

    
    <script>
        // Fungsi untuk validasi login
        function validateLogin(event) {
            event.preventDefault(); // Mencegah submit form default

            const usernameInput = document.getElementById('username').value;
            const passwordInput = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');

            // Cek apakah username dan password sesuai
            if (usernameInput === "223443042" && passwordInput === "210503") {
                // Redirect ke halaman dashboard
                window.location.href = "/tugas-besar/public/dashboarddesign"; // Ganti URL dengan yang sesuai
            } else {
                errorMessage.style.display = 'block'; // Tampilkan pesan error
            }
        }

        const wrapper = document.querySelector('.wrapper');
        const registerLink = document.querySelector('.register-link');
        const loginLink = document.querySelector('.login-link');

        registerLink.onclick = () => {
            wrapper.classList.add('active');
        };

        loginLink.onclick = () => {
            wrapper.classList.remove('active');
        };
    </script>
</body>
</html> 