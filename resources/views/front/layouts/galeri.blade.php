<html>

<head>
    <title>Galeri HMIF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 1100px;
            width: 100%;
            padding: 40px 15px;
            margin: 0 auto;
            box-sizing: border-box;
            text-align: center;
        }

        .gallery {
            margin: 50px 0;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 25px;
        }

        .gallery img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border: 1px solid #eee;
            box-shadow: 1px 2px 3px #ddd;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
    <div class="container">
        <div class="header">
            <img src="https://km.itera.ac.id/wp-content/uploads/elementor/thumbs/Logo-HMIF-pi6qxmsxj1kimiixaslxhtxk6ehdkm7lxn1loddl8w.png">
            <h1>WELCOME TO</h1>
            <p>HMIF GALERI</p>
        </div>
        <div class="gallery">
            @foreach($galeri as $g)
                <img src="{{ asset('assets')}}/galeri/{{$g->gambar}}">
            @endforeach
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
