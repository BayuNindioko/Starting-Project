<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , intial-scale="1.0">
    <title>Starting Project</title>
    <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family-Poppins:400,500,600,700);
    * {
        text-decoration: none;
        margin: 0px;
        padding: 0px;
        font-family: 'Poppins', sans-serif;
    }

    body {
        margin: 0px;
        padding: 0px;
        font-family: 'Open Sans', sans-serif;
    }

    .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
    }

    .logo {
        float: left;
        margin: auto;
    }

    .menu {
        float: left;
    }

    nav {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 80px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #125C13;
        font-style: italic;
        z-index: 1;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav ul li {
        float: left;
    }

    nav ul li a {
        color: #ffff;
        font-weight: bold;
        text-align: center;
        padding: 0px 16px 0px 16px;
        text-decoration: none;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    section {
        margin: auto;
        margin-bottom: 50px;
        display: flex;
        width: 850px;
        height: 250px;
        padding: 50px;
    }

    .kolom {
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 40px;
    }

    .kolom .deskripsi {
        font-size: 40px;
        font-weight: bold;
        color: #125C13;
        font-family: 'comic sans ms';
    }

    p {
        font-family: 'comic sans ms';
        width: 100%;
        font-size: 17px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    a.tbl-biru {
        background: #EAE509;
        border-radius: 20px;
        margin-top: 20px;
        padding: 10px 20px 10px 20px;
        color: #125C13;
        cursor: pointer;
        font-weight: bold;
    }

    a.tbl-yellow {
        background: #EAE509;
        border-radius: 20px;
        margin-top: 20px;
        padding: 10px 20px 10px 20px;
        color: #125C13;
        cursor: pointer;
        font-weight: bold;
    }

    a.tbl-yellow:hover {
        text-decoration: underline;
    }

    a.tbl-red {
        background: #EAE509;
        border-radius: 20px;
        margin-top: 20px;
        padding: 10px 20px 10px 20px;
        color: #125C13;
        cursor: pointer;
        font-weight: bold;
        margin-left: 430px;
    }

    a.tbl-red:hover {
        text-decoration: underline;
    }

    .kolom .ilmu {
        margin-top: 12px;
        margin-bottom: 40px;
        margin-left: 110px;
        font-family: 'arial narrow';
        font-weight: bold;
        font-size: 22px;
    }

    .announce {
        margin-top: 20px;
        margin-left: 20px;
        padding: 20px;
        font-family: 'arial narrow';
        font-size: 20px;
    }

    .announce h3 {
        margin-left: 110px;
        margin-bottom: 40px;
    }

    .kolom .foto {
        font-family: 'arial narrow';
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin-top: 200px;
        margin-bottom: 20px;
        background-color: #125C13;
        color: #ffff;
    }

    .foto h4 {
        background: #EAE509;
    }

    .foto-content {
        height: 100%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .foto-icon {
        position: relative;
        width: 300px;
        height: 300px;
        margin: 20px;
    }

    .foto-icon img {
        width: 100%;
    }

    .kolom .foto {
        font-family: 'arial narrow';
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin-top: 200px;
        margin-bottom: 20px;
        background-color: #125C13;
        color: #ffff;
    }

    .tirai h4 {
        background: #EAE509;
    }

    .tirai-content {
        height: 100%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .tirai-icon {
        position: relative;
        width: 300px;
        height: 300px;
        margin: 20px;
    }

    .tirai-icon img {
        width: 100%;
    }

    .kolom .tirai {
        font-family: 'arial narrow';
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin-top: 150px;
        margin-bottom: 20px;
        background-color: #125C13;
        color: #ffff;
    }

    .main {
        width: 1200px;
        height: 100px;
        margin: auto;
    }

    .dept-content {
        height: 100%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .dept-box {
        width: 300px;
        height: 300px;
        margin: 30px;
    }

    .dept-box p {
        position: absolute;
        top: 44%;
        width: 100%;
    }

    .dept-box img {
        width: 100%;
    }

    .dept-box .text1 {
        position: relative;
        width: 20px;
        bottom: 285px;
        left: 20px;
        color: #EAE509;
        font-family: 'arial narrow';
        font-size: 13px;
    }

    .kabnt img {
        width: 15%;
        height: 15%;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 460px;
    }

    .kabnt h2 {
        text-align: center;
        margin-bottom: 30px;
        font-family: "Gill Sans", sans-serif;
        font-size: 30px;
    }

    .adika-content {
        height: 100%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .adika-box {
        width: 300px;
        height: 300px;
        margin: 30px;
    }

    .adika-box img {
        width: 22%;
        height: 22%;
        padding: 10px;
    }

    .footer {
        width: 100%;
        height: 400px;
        background-color: #125C13;
    }

    .footercontent {
        width: 350px;
        height: 300px;
        float: left;
        margin-top: 50px;
        margin-left: 230px;
    }

    h5 {
        margin-top: 20px;
        padding: 45px;
        font-size: 35px;
        margin-bottom: 5px;
        color: #EAE509;
    }

    .footertext p {
        color: #ffff;
        font-size: 12px;
    }

    .header {
        width: 100%;
        height: 30px;
    }

    .headercontent {
        width: 650px;
        height: 50px;
        float: left;
        margin-bottom: 30px;
        margin-left: 230px;
    }

    .headertext p {
        color: black;
        font-size: 12px;
        font-weight: bold;
    }

    .sosmed .button {
        display: inline-block;
        height: 50px;
        width: 50px;
        float: left;
        margin: 0 5px;
        overflow: hidden;
        background: #fff;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-out;
    }

    .sosmed .button .icon {
        display: inline-block;
        height: 50px;
        width: 50px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 50px;
        transition: all 0.3s ease-out;
    }

    .sosmed .button:nth-child(1):hover .icon {
        background: #2ecc71;
    }

    .sosmed .button:nth-child(2):hover .icon {
        background: #3498db;
    }

    .sosmed .button:nth-child(3):hover .icon {
        background: #f1c40f;
    }

    .sosmed .button:nth-child(4):hover .icon {
        background: #e67e22;
    }

    .sosmed .button .icon {
        font-size: 25px;
        line-height: 50px;
        transition: all 0.3s ease-out;
    }

    .sosmed .button:hover .icon {
        color: #fff;
    }

    .sosmed .button span {
        font-size: 20px;
        font-weight: 500;
        line-height: 50px;
        margin-left: 10px;
        transition: all 0.3s ease-out;
    }

    .sosmed .button:nth-child(1)span {
        background: #2ecc71;
    }

    .sosmed .button:nth-child(2)span {
        background: #3498db;
    }

    .sosmed .button:nth-child(3)span {
        background: #f1c40f;
    }

    .sosmed .button:nth-child(4)span {
        background: #e67e22;
    }
    </style>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <img class="logo" src="https://km.itera.ac.id/wp-content/uploads/elementor/thumbs/Logo-HMIF-pi6qxmsxj1kimiixaslxhtxk6ehdkm7lxn1loddl8w.png" width="85px" height="85px">
            <div class="menu">
                <ul>
                    <li><a href={{ route('index') }}>HOME</a></li>
                    <li><a href={{ route('galeri') }}>GALERI</a></li>
                    <li><a href={{ route('news') }}>NEWS</a></li>
                    <li><a href="#contact us">CONTACT US</a></li>
                    <li><a href="" class="tbl-biru">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header">
        <div class="headercontent">
            <h1>WELCOME TO HMIF WEBSITE</h1>
        </div>
        <div class="headertext">
            <p>Jl. Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kab. Lampung Selatan, Lampung 35365</p>
            <p>Email: kabinetadikacita@gmail.com</p>
        </div>
    </div>
    <div class="wrapper">
        <!-- HMIF -->
        <section id="home">
            <img src="https://km.itera.ac.id/wp-content/uploads/elementor/thumbs/Logo-HMIF-pi6qxmsxj1kimiixaslxhtxk6ehdkm7lxn1loddl8w.png">
            <div class="kolom">
                <h2 class="deskripsi">HMIF?</h2>
                <p>HMIF adalah organisasi kemahasiswaan di tingkat program studi informatika yang dibentuk oleh mahasiswa program studi informatika yang berdiri pada tahun 2018 serta melaksanakan kegiatan yang menunjang akademik dan non akademik di lingkup
                    program studi informatika yang bersifat eksekutif, aspiratif, dan advokatif.</p>
                <p><a href="" class="tbl-yellow">Baca Selengkapnya</a></a>
                </p>
            </div>
        </section>
        <div class="kabnt">
            <img src="image/logo.png" alt="">
            <h2>KABINET ADIKACITA</h2>
        </div>
        <div class="adika">
            <div class="adika-content">
                <div class="adika-box">
                    <img src="image/logo1.png" alt="">
                    <div class="text1">
                        <p>Bentuk burung melambangkan sebuah harapan yang dapat terbang tinggi, seperti arti nama dari adikacita yang memiliki arti harapan terbaik. Sehingga di harapkan badan pengurus tahun ini dapat membawa seluruh harapan dan nama HMIF
                            terbang tinggi</p>
                    </div>
                </div>
                <div class="adika-box">
                    <img src="image/logo2.png" alt="">
                    <div class="text1">
                        <p>Sayap Pertama Berwarna Biru : Melambangkan Teknik Informatika</p>
                    </div>
                </div>
                <div class="adika-box">
                    <img src="image/logo3.png" alt="">
                    <div class="text1">
                        <p>Sayap Kedua Berwarna Kuning : Melambangkan Teknik Elektro sebagai saudara</p>
                    </div>
                </div>
                <div class="adika-box">
                    <img src="image/logo4.png" alt="">
                    <div class="text1">
                        <p>Badan Burung Berwarna Hijau : Melambangkan HMIF sebagai rumah pertama</p>
                    </div>
                </div>
                <div class="adika-box">
                    <img src="image/logo5.png" alt="">
                    <div class="text1">
                        <p>4 Sayap Burung : Melambangkan badan pengurus ke 4</p>
                    </div>
                </div>
                <div class="adika-box">
                    <img src="image/logo6.png" alt="">
                    <div class="text1">
                        <p>Lingkaran Kecil di 4 Titik dengan Garis Menyambung : Melambangkan Kolaborasi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dept">
            <div class="dept-content">
                <div class="dept-box">
                    <img src="https://cf.shopee.co.id/file/7cffeac9f9326369f87ab3b84ebe2853">
                    <div class="text1">
                        <h2>DEPARTEMEN INTERNAL</h2>
                    </div>
                </div>
                <div class="dept-box">
                    <img src="https://cf.shopee.co.id/file/7cffeac9f9326369f87ab3b84ebe2853">
                    <div class="text1">
                        <h2>DEPARTEMEN EKSTERNAL</h2>
                    </div>
                </div>
                <div class="dept-box">
                    <img src="https://cf.shopee.co.id/file/7cffeac9f9326369f87ab3b84ebe2853">
                    <div class="text1">
                        <h2>DEPARTEMEN PSDA</h2>
                    </div>
                </div>
                <div class="dept-box">
                    <img src="https://cf.shopee.co.id/file/7cffeac9f9326369f87ab3b84ebe2853">
                    <div class="text1">
                        <h2>DEPARTEMEN KEPROFESIAN</h2>
                    </div>
                </div>
                <div class="dept-box">
                    <img src="https://cf.shopee.co.id/file/7cffeac9f9326369f87ab3b84ebe2853">
                    <div class="text1">
                        <h2>DEPARTEMEN KOMUNIKASI DAN INFORMASI</h2>
                    </div>
                </div>
            </div>
        </div>
        <section id="news">
            <div class="kolom">
                <p class="ilmu">ILMU HARI INI</p>
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20210207/pngtree-gray-solid-color-simple-background-image_557028.jpg">
            </div>
            <div class="announce">
                <h3>PENGUMUMAN</h3>
                <p>Python dibuat dan dikembangkan oleh Guido Van Rossum, yaitu seorang programmer yang berasal dari Belanda pada tahun 1990. Pada tahun 1995 Python dikembangkan lagi agar lebih kompatibel oleh Guido Van Rossum</p>
                <p><a href="" class="tbl-yellow">Baca Selengkapnya</a></a>
            </div>
        </section>
        <div class="kolom">
            <h4 class="foto">GALERI</h4>
            <div class="foto-content">
                <div class="foto-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
                <div class="foto-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
                <div class="foto-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
            </div>
            <p><a href="" class="tbl-red">Lihat Selengkapnya</a></p>
        </div>
        <div class="kolom">
            <h4 class="tirai">TIRAI HMIF</h4>
            <div class="tirai-content">
                <div class="tirai-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
                <div class="tirai-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
                <div class="tirai-icon">
                    <img src="https://lh3.googleusercontent.com/hPOX38qh30xftFwl0dU2-eqsqmyeNyOWV4v0oZ2bUyj4AvhfuB0EGyH0ifF0OMM99ks=w300">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footercontent">
            <img src="img/denah.jpg" alt="">
        </div>
        <div class="footertext">
            <h5>HMIF</h5>
            <p>Institut Teknologi Sumatera</p>
            <p>Jl. Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kab. Lampung Selatan, Lampung 35365</p>
            <p>Email: kabinetadikacita@gmail.com</p>
            <p>Departemen Keprofesian</p>
        </div>
        <div class="sosmed">
            <div class="button">
                <div class="icon">
                    <i class="fab fa-instagram"></i>
                </div>
                <span>Instagram</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-youtube"></i>
                </div>
                <span>Youtube</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-tiktok"></i>
                </div>
                <span>Tiktok</span>
            </div>
            <div class="button">
                <div class="icon">
                    <i class="fab fa-line"></i>
                </div>
                <span>Line</span>
            </div>
        </div>
    </div>


</body>

</html>
