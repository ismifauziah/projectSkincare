
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: rgb(224, 138, 167);
            color: #770c60;
        }

        header {
            background-color: palevioletred;
            color: rgb(39, 20, 23);
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: rgb(39, 20, 23);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url(https://www.eminacosmetics.com/cfind/source/thumb/images/emina-banner/cover_w1920_h590_1920-x-590-px.jpg);
            background-size: cover;
            background-position: center;
            color: rgb(39, 20, 23);
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .hero a {
            background-color: palevioletred;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .hero a:hover {
            background-color: #555;
        }

        .products {
            padding: 50px 20px;
            text-align: center;
        }

        .products h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .product-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 60px);
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .product h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product p {
            margin-bottom: 15px;
        }

        .product a {
            display: inline-block;
            background-color: pink;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .product a:hover {
            background-color: palevioletred;
        }

        .about {
            background-color: palevioletred;
            padding: 50px 20px;
            text-align: center;
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .about p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 18px;
        }


        footer {
            background-color: palevioletred;
            color: #770c60;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .product {
                width: calc(50% - 40px);
            }

            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .product {
                width: calc(100% - 30px);
            }

            .hero h2 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Skincare</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        <h2>Kulit Cantik Berseri</h2>
        <p>Temukan produk perawatan kulit terbaik untuk Anda.</p>
        <a href="#">Belanja Sekarang</a>
    </section>

    
    <section class="products" id="">
        <h2>Shop Our Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/toner/bright-stuff/cover_w506_h506_tw717_th717_x11_y12_bright-stuff-face-scrub.png" alt="">
                <h3>Bright Stuff Face Scrub</h3>
                <p>Face Wash</p>
                <p>IDR 25.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/cleanser/cover_w322_h_main-Creamy-Milk-Cleansing-Lotion.png" alt="">
                <h3>Creamy Milk Cleansing Lotion</h3>
                <p>Make Up Romover</p>
                <p>IDR 22.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/cleanser/cover_w322_h_main-Dirtless-make-up-remover.png" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 20.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/bs-whip/cover_w506_h506_tw393_th393_x153_y151_bs_whip_resize.001-removebg-preview.png" alt="">
                <h3>Bright Stuff Whip Face Wash 50 ml</h3>
                <p>Face Wash</p>
                <p>IDR 40.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/cleanser/cover_w322_h_main-Dirtless-make-up-remover.png" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 27.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/product/cleanser/cover_w322_h_main-Emina-BS-Acne-Prone-Face-Wash.png" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 15.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="https://www.eminacosmetics.com/cfind/source/thumb/images/ms-pimple-new/cover_w506_h506_packshot-506-x-506-10.png" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 24.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 35.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img src="img/cover_w322_h_main-Emina-BS-Acne-Prone-Face-Wash.png" alt="">
                <h3>Dirt-less In Sight</h3>
                <p>Make Up Romover</p>
                <p>IDR 33.000</p>
                <a href="#">Beli Sekarang</a>
            </div>
        </div>
    </section>

    <section class="about" id="">

        <h2>Tentang Kami</h2>
        <p>Kami adalah toko yang menyediakan produk skincare berkualitas tinggi untuk perawatan kulit Anda. Dengan bahan-bahan alami dan teknologi terbaru, produk kami dirancang untuk memberikan hasil terbaik bagi kesehatan dan kecantikan kulit Anda.</p>
    </section>

    <footer>
        <p>&copy; 2024 Skincare . Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>