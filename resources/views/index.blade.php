@extends('layouts.main')

@section('container')
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="homePage.php">StoreX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <!--<a class="nav-item nav-link active" aria-current="page" href="#">StoreX</a>-->

                    <a class="nav-item nav-link" href="koinPage.php">Coin List</a>
                    <a class="nav-item nav-link" href="newRecomPage.php">New post</a>
                    <a class="nav-item nav-link" href="userPage.php">Userpage</a>
                    <a class="nav-item nav-link" href="CalculatorHP.php">Calculator</a>
                    <a class="btn btn-warning" href="loginAdminPage.php" role="button">Admin</a>


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
            <a class="btn btn-warning btn-lg mx-2 my-2" href="mailto:storexindonesia@gmail.com" role="button">Reach us</a>
            <a class="btn border-warning text-white btn-lg mx-2 my-2" href="https://t.me/+Lhrgz_kn04dkNjFl"
                role="button">Join Community</a>
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
                        <h4>Easy</h4>
                        <p>Upload your recommendation with picture</p>
                    </div>
                    <div class="col-lg">
                        <img src="../img/security.png" alt="..." class="float-left">
                        <h4>Privacy</h4>
                        <p>No need account to create recommendation</p>
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
                <h3>What is <span>Cryptocurrency</span>, Whats cool?</h3>
                <div class="container mt-2 justify-content-center">
                    <p>Digital or virtual currency that is secured by cryptography, which makes it nearly impossible to
                        counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain
                        technology—a distributed ledger enforced by a disparate network of computers.</p>
                </div>

                <!-- <a href="" class="btn btn-primary">KLIK</a> -->
            </div>
            <figure class="text-center">
                <blockquote class="blockquote fontKdam fst-italic">
                    <h5>"Like the Internet, Bitcoin will change the way people interact and do business around the world"
                    </h5>
                </blockquote>
                <figcaption class="blockquote-footer fst-italic">
                    Erik Voorhees
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
