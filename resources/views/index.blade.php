@extends('layouts.main')

@section('container')
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://images.tokopedia.net/img/cache/215-square/GAnVPX/2021/11/24/968e9cdc-8dc0-40be-96bd-649ac23b2424.png" alt="" width="50px" height=""></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <!--<a class="nav-item nav-link active" aria-current="page" href="#">StoreX</a>-->

                    <a class="nav-item nav-link" href="koinPage.php">All Products</a>
                    <a class="nav-item nav-link" href="newRecomPage.php">About Us</a>
                    <a class="nav-item nav-link" href="userPage.php">Partners</a>
                    <a class="nav-item nav-link" href="CalculatorHP.php">Contact</a>
                    <a class="btn btn-info" href="loginAdminPage.php" role="button">Guest</a>


                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar-->


    <!-- Jumbotron-->
    <div class="jumbotron bg-light p-5 rounded-lg">
        <div class="container">
            <h1 class="display-4"><span>Discover</span> a world of possibilities <br> with Our <span>Products</span> now
            </h1>
            <hr class="my-4">
            <a class="btn btn-info btn-lg mx-2 my-2" href="mailto:storexindonesia@gmail.com" role="button">Reach us</a>
            <a class="btn border-info text-white btn-lg mx-2 my-2" href="https://nael.monster/kevin/assets/video/kevin.mp4"
                role="button">Video kevin nyanyi</a>
        </div>
    </div>
    <!--Akhir Jumbotron-->

    <!-- Container-->
    <div class="container">
        <!-- Panel-->
        <div class="row justify-content-center">
            <div class="col-10 panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="../img/employee.png" alt="..." class="float-left">
                        <h4>24 Hours</h4>
                        <p>Customer Service ready to help you</p>
                    </div>
                    <div class="col-lg">
                        <img src="../img/hires.png" alt="..." class="float-left">
                        <h4>Fast</h4>
                        <p>Delivery in just a second</p>
                    </div>
                    <div class="col-lg">
                        <img src="../img/security.png" alt="..." class="float-left">
                        <h4>Guarantee</h4>
                        <p>Easy return within 7 days</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Panel-->

        <!--Welcome-->
        <div class="row welcome mb-3">
            <div class="col-sm">
                <img src="../img/pic1.jpg" alt="" class="img-fluid rounded ukGambar justify-content-center rounded">
            </div>
            <div class="col">
                <h3>Apa yang <br> <span>StoreX Indonesia</span><br> Jual?</h3>
                <div class="container mt-2 justify-content-center">
                    <p>Pusatnya produk IT dan Elektronik Surabaya. Dijamin akan pelayanan serta kecepatan pengiriman <br> Seluruh paket harap video unboxing menunjukkan resi+ seluruh bagian paket hingga produk   </p>
                </div>

                <!-- <a href="" class="btn btn-primary">KLIK</a> -->
            </div>
            <figure class="text-center">
                <blockquote class="blockquote fontKdam fst-italic">
                    <h5>"Build your future smart home with StoreX Indonesia"
                    </h5>
                </blockquote>
                <figcaption class="blockquote-footer fst-italic">
                    Kenneth Ganteng
                </figcaption>
            </figure>
        </div>
        <!--Akhir welcome-->

        <div class="row text-center">
            <div class="col ukLogo">
                <img src="../img/eth.logo.png" alt="" style="width: 200px;">
            </div>
            <div class="col">
                <img src="../img/bitcoin.logo.png" alt="" style="width: 300px;">
            </div>
            <div class="col">
                <img src="../img/bnb.logo.png" alt="" style="width: 200px;">
            </div>
        </div>
    </div>
    <!-- Akhir Container-->
@endsection
