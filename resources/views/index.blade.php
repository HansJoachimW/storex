@extends('layouts.main')

@section('container')
    
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StoreX</title>


    <!-- CSS-->
    <style>
        .fontKdam {
            font-family: 'Kdam Thmor Pro', sans-serif;
        }

        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-brand {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 32px;
        }

        /* Jumbotron*/

        .jumbotron {
            background-image: url(https://visuallightbox.com/content/data/upload/2017/04/example-jumb.jpg);
            background-size: cover;
            text-align: center;
            height: 620px;
            width: 100%;
            position: relative;


        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;
            margin-left: -48px;
        }

        .jumbotron .display-4 {
            color: white;

            margin-top: 150px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
            font-size: 30px;
            text-align: center;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }

        /* Panel*/
        .panel {

            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            margin-top: -90px;
            background-color: white;
            position: relative;
            z-index: 1;
            padding: 30px;
            margin-bottom: 80px;



        }

        .panel img {
            width: 80px;
            height: 80px;
            margin-right: 20px;

            float: left;
        }

        .panel h4 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 5px;
        }

        .panel p {
            font-size: 14px;
            color: #ACACAC;
        }

        .welcome h3 {
            font-size: 52px;
            font-weight: 200;
            text-transform: uppercase;
        }

        .welcome h3 span {
            font-weight: bold;
        }

        .welcome p {
            font-size: 18px;
            color: #ACACAC;
            margin: 25px 0;
        }

        .welcome {
            text-align: center;
        }

        .ukGambar {
            width: 500px;
            padding: 10px;

        }

        /* Live harga coin */


        /* Live harga coin */

        .hargaCoin {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        .hargaCoin .coin-price {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 3px #ccc;
            margin: 7px;
        }

        .hargaCoin .coin-price .logo {
            width: 70px;
            margin-right: 10px;
        }

        .hargaCoin .coin-price .logo img {
            width: 100%;
        }

        .hargaCoin .coin-price div {
            display: block;
        }

        .hargaCoin .coin-price div h1 {
            font-size: 20px;
        }

        .welcome h3 {
            font-size: 40px;
            font-weight: 100;
            text-transform: uppercase;
        }

        .welcome h3 span {
            font-weight: bold;
        }






        /* Versi dekstop*/

        @media (min-width: 992px) {

            .jumbotron .display-4 {
            color: white;

            margin-top: 150px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
            font-size: 40px;
            text-align: center;
        }

            .welcome h3 {
            font-size: 52px;
            font-weight: 200;
            text-transform: uppercase;
        }

        .welcome h3 span {
            font-weight: bold;
        }
            .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
            }

            .nav-link:hover::after {
                content: '';

                display: block;
                border-bottom: 3px dotted orange;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;

            }

            .jumbotron {
                height: 720px;
                margin-top: -75px;

            }

            .navbar-brand,
            .nav-link {
                color: white;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            }

            .jumbotron .display-4 {
                font-size: 62px;
            }

            .welcome {
                text-align: left;
            }

            .ukGambar {
                width: 600px;
                height: 400px;

            }

           
    </style>
</head>

<body id="top">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="homePage.php">StoreX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
            <h1 class="display-4"><span>Discover</span> a world of possibilities <br> with Our <span>Products</span> now</h1>
            <hr class="my-4">
            <a class="btn btn-warning btn-lg mx-2 my-2" href="mailto:storexindonesia@gmail.com" role="button">Reach us</a>
            <a class="btn border-warning text-white btn-lg mx-2 my-2" href="https://t.me/+Lhrgz_kn04dkNjFl" role="button">Join Community</a>
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
                    <p>Digital or virtual currency that is secured by cryptography, which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers.</p>
                </div>

                <!-- <a href="" class="btn btn-primary">KLIK</a> -->
            </div>
            <figure class="text-center">
                <blockquote class="blockquote fontKdam fst-italic">
                    <h5>"Like the Internet, Bitcoin will change the way people interact and do business around the world"</h5>
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

</body>

</html>
@endsection