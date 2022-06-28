<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="page-top">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Jaya Coffe</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#page-top">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#support">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="LoginPage.php">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="beliForm.php">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="button">Beli</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--BANNER-->
    <div class="container-fluid">
        <div class="banner">
            <div class="container text-center">
                <!--Pengaturan teks rata tengah-->
                <h2 class="font-weight-bold">HALO!</h2>
                <h1 class="font-weight-bolder">Selamat Datang di Jaya Coffe</h1>
                <br>
                <a href="#menu">
                    <button type="button" class="btn btn-warning btn-lg">
                        NEXT
                    </button>
                    <!--Tombol Next untuk lanjut ke bagian About-->
                </a>
            </div>
        </div>
        
    </div>

     <!--Menu-->
     <div class="container-fluid about pt-5 pb-5" id="menu">
        <div class="container text-center">
            <h5 class="text-warning font-weight-normal">FROM THE BEST INDONESIAN SPECIALTY COFFEE TO HEART-WARMING FOODS</h5>
            <a class="nav-link" href="menu.php"><h1 class="font-weight-bold-600 text-secondary">OUR MENU</h1></a>
            <div class="bg-warning line"></div>

            <div class="row pt-4"> <!--Mengatur baris pada layar-->
                <div class="col-md-6"> <!--Mengatur Grid pada layar-->
                    <img src="./image/food.webp" class="rounded crop-img" width="300" height="300"><!--Menggunakan gambar dengan link-->
                    <br>
                    <h3 class="mt-3">FOOD</h3> <!--Mengatur spasi margin-->
                    <br>
                    <p class="mt-2 pd-2 text-secondary">
                        Makanan adalah zat yang dimakan oleh makhluk hidup untuk mendapatkan nutrisi yang kemudian diolah menjadi energi. Karbohidrat, lemak, protein, vitamin, dan mineral merupakan nutrisi makanan yang dibutuhkan oleh tubuh.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="./image/drink.webp" class="rounded crop-img" width="300" height="300"> <!--Menggunakan gambar dengan link-->
                    <br>
                    <h3 class="mt-3">DRINK</h3> <!--Mengatur spasi margin-->
                    <br>
                    <p class="mt-2 pd-2 text-secondary">
                        Minuman adalah segala sesuatu yang dapat dikonsumsi dan dapat menghilangkan rasa haus. Minuman umumnya berbentuk cair, namun ada pula yang berbentuk pada seperti es krim atau es lilin.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--About-->
    <div class="container-fluid pt-5 pb-5" id="about"> <!--mengatur padding-->
        <div class="container">
            <h5 class="text-center text-warning font-weight-normal">ABOUT US</h5>
            <h1 class="text-center text-bold text-secondary">TENTANG KAMI</h1>
            <div class="bg-warning line"></div>
            <div class="row bg-light">
                <div class="col-md-6">
                    <p>
                        Kami adalah perusahaan kopi yang mendedikasikan seluruh gairah, kecintaan, dan antusiasme kami kepada dunia kopi yang menakjubkan. Kami adalah perusahaan lokal dan sebagian besar bahan baku yang kami gunakan adalah lokal. Ya, dan kami mengatakan hal tersebut dengan bangga.
                    </p>
                    <p>
                        Kami tahu, begitu juga Anda, bahwa biji-biji kopi terbaik dunia berasal dari Indonesia. Kami berkeliling ke berbagai pelosok Indonesia dan bekerja sama dengan para petani dan pemanggang kopi lokal untuk mendapatkan cite rasa kopi terbaik Indonesia, bijt kopi arabika grade satu dan berbagai perkebunan yang tersebar di Nusantara. 
                    </p>
                    <p>
                        Dengan pengalaman dan pengetahuan kami di industri kopi ritel, mulai dan pemWhan biji kopi sampai dengan bagaimana mendesain sebuah coffee bar, kami membuat perjalanan bisnis kopi Anda menjadi EASY,SIMPLE,dan FUN!
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="./image/Coffee_Toffee_-_Sketsa_Coffee_Bar_02_1x.png" class="crop-img" width="600" height="400">
                </div>
            </div>
            <br><br>
            <h5 class="text-center text-warning">MOMENTS</h5>
            <h2 class="text-center text-secondary text-bold">GALERY</h2>
            <div class="line bg-warning"></div>
            <div class="row">
                <div class="col-md-3">
                    <img src="./image/gallery/galeri1.jpg" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri2.jpg" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri3.jpg" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri4.jpg" width="200" height="200">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3">
                    <img src="./image/gallery/galeri5.webp" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri6.webp" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri7.webp" width="200" height="200">
                </div>
                <div class="col-md-3">
                    <img src="./image/gallery/galeri8.webp" width="200" height="200">
                </div>
            </div>
        </div>
    </div>

    <!--Review-->
    <div class="container-fluid pt-5 pb-5 review" id="review"> <!--Mengatru padding-->
        <div class="container">
            <h5 class="text-center text-warning" >REVIEW AND FEEDBACK</h5>
            <h1 class="text-center text-default text-bold">REVIEW</h1>
            <div class="line bg-warning"></div>
            <p class="text-center">KAMI MENYEDIAKAN LAYANAN DAN KRITIK</p>
            <?php
                if(isset($_GET["error"])) {
                    $error = $_GET["error"];
                } else {
                    $error = "";
                }

                $massage = "";
                if($error == "gagal") {
                    $massage = "Gagal input saran, silahkan coba kembali";
                } else if($error == "berhasil") {
                    $massage = "Input saran telah berhasil";
                }
            ?>
            <p style="color: white;"><?php echo $massage; ?></p>
            <form action="saranProses.php" method="post">
                <div class="row pb-3"> <!--mengatur baris dengan padding botton-->
                    <div class="col-md-6"> <!--mengatur grid pada layar-->
                        <!--Menambahkan form kritik-->
                            <input class="form-control form-control-lg mb-1" 
                            name="nama" type="text" placeholder="Nama">
                            <input class="form-control form-control-lg mb-1" 
                            name="email" type="text" placeholder="Email">
                            <input class="form-control form-control-lg mb-1" 
                            name="nohp" type="text" placeholder="No. HP">
                            <input class="form-control form-control-lg mb-1" 
                            name="medsos" type="text"placeholder="Sosial Media">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-lg" 
                        rows="6" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="col-md-3 mx-auto text-center">
                    <button type="submit" class="btn btn-danger btn-lg">
                    Send Massage
                    </button>
                </div>   
            </form>
        </div>
    </div>

    <!--Support-->
    <div class="container-fluid pt-5 pb-5" id="support">
        <div class="container text-center">
            <h1 class="text-secondary text-bold">SUPPORT</h1>
            <div class="line bg-warning"></div>
            <p>
                TEAM YANG TELAH MENDUKUNG UNTUK SUKSES COFFE SHOP INI
            </p>
            <div class="row pt-4 gx-4 gy-4"> <!--Mengatur baris pada layar-->
                <div class="col-md-4 text-center support"> <!--mengatur grid pada layar-->
                    <img src="./image/contact/barista.webp" class="rounded-circle mb-3" width="300" height="250"/>
                    <!--Menambahkan gambar dan mengatur dengan bentuk bulat-->
                    <h4>Malik Ikhsan</h4>
                    <p class="text-warning">BARISTA</p>
                    <p>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">TWITTER</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">INSTAGRAM</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">FACEBOOK</button>
                        </a>
                        <!--Menambahkan icon sosial media-->
                    </p>
                </div>
                
                <div class="col-md-4 text-center support">
                    <img src="./image/contact/chef.webp" class="rounded-circle mb-3" width="300" height="250"/>
                    <h4>Biski Tanama</h4>
                    <p class="text-warning">CHEFF</p>
                    <p>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">TWITTER</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">INSTAGRAM</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">FACEBOOK</button>
                        </a>
                    </p>
                </div>

                <div class="col-md-4 text-center support">
                    <img src="./image/contact/owner.webp" class="rounded-circle mb-3" width="300" height="250"/>
                    <h4>Nagita Salma</h4>
                    <p class="text-warning">OWNER</p>
                    <p>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">TWITTER</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">INSTAGRAM</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn-sm btn-default">FACEBOOK</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Contact-->
    <div class="container-fluid bg-light" id="contact">
        <br>
        <h5 class="text-center text-warning">CONTACT US</h5>
        <h1 class="text-center text-bold" >KONTAK KAMI</h1>
        <div class="line bg-warning"></div>
        <br>
    </div>
    <div class="container-fluid pt-5 pb-5"> <!--Mengatru padding-->
        <div class="container text-center">
            <h2 class="text-secondary font-weight-light">JEJARING KONTAK</h2>
            <h5 class="text-secondary font-weight-light">Anda dapat berkomunikasi lebih jauh dengan kami melalui jejaring media berikut :</h5>
        </div>
        <div class="container-fluid text-center">
            <br><br>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img src="./image/contact/instagram.png" height="70" width="70">
                    </a><br><br>
                    <h5 class="text-secondary">INSTAGRAM</h5>
                    <a class="text-dark" href="">
                        @JayaCoffeIDN
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="./image/contact/facebook.webp" height="70" width="70">
                    </a><br><br>
                    <h5 class="text-secondary">FACEBOOK</h5>
                    <a class="text-dark" href="">
                       Jaya Coffee Shop Indonesia
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="./image/contact/email.png" height="70" width="70">
                    </a><br><br>
                    <h5 class="text-secondary">EMAIL</h5>
                    <a class="text-dark" href="">
                        Jayacoffe@gmail.com
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="./image/contact/wa.png" height="70" width="70">
                    </a><br><br>
                    <h5 class="text-secondary">WHATSAPP</h5>
                    <a class="text-dark" href="">
                        08996606440
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Copy Right-->
    <div class="container text-center pt-5 pb-5">
        &copy; 2022. <b>Jaya Coffe</b> | All Right Reserved
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>