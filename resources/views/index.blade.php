@extends('layouts.main')

@section('container')
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img
                    src="https://images.tokopedia.net/img/cache/215-square/GAnVPX/2021/11/24/968e9cdc-8dc0-40be-96bd-649ac23b2424.png"
                    alt="" width="50px" height=""></a>
            <a href="" class="navbar-brand mr-5" style="font-size: 30px">Storex Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <!--<a class="nav-item nav-link active" aria-current="page" href="#">StoreX</a>-->

                    <a class="nav-item nav-link" href="#AllProducts">All Products</a>
                    <a class="nav-item nav-link" href="#AboutUs">About Us</a>
                    <a class="nav-item nav-link" href="#Partner">Partners</a>
                    <a class="nav-item nav-link" href="#Order">Order</a>
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
            <a class="btn border-info text-white btn-lg mx-2 my-2" href="https://wa.me/message/X4S4XSNV2K4LM1"
                role="button">WhatsApp</a>
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
                        <img src="https://i.vgy.me/JGUv1x.jpg" alt="..." class="float-left">
                        <h4>24 Hours</h4>
                        <p>Customer Service ready to help you</p>
                    </div>
                    <div class="col-lg">
                        <img src="https://i.vgy.me/JGUv1x.jpg" alt="..." class="float-left">
                        <h4>Fast</h4>
                        <p>Delivery in just a second</p>
                    </div>
                    <div class="col-lg">
                        <img src="https://i.vgy.me/JGUv1x.jpg" alt="..." class="float-left">
                        <h4>Guarantee</h4>
                        <p>Easy return within 7 days</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Panel-->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner shadow-lg p-3 mb-5  rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100 rounded" src="https://i.vgy.me/3WfPV1.png" alt="First slide">
                </div>
                <div class="carousel-item rounded">
                    <img class="d-block w-100" src="https://i.vgy.me/WVhkMq.png" alt="Second slide">
                </div>
                <div class="carousel-item rounded">
                    <img class="d-block w-100" src="https://i.vgy.me/pI0Y7d.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Welcome-->
        <div class="row welcome mb-3 " id="AboutUs">
            <div class="col-sm">
                <img src="https://i.vgy.me/B6NhmK.jpg" alt=""
                    class="img-fluid rounded ukGambar justify-content-center rounded">
            </div>
            <div class="col">
                <h3>Apa yang <br> <span>StoreX Indonesia</span><br> Jual?</h3>
                <div class="container mt-2 justify-content-center">
                    <p>Pusatnya produk IT dan Elektronik Surabaya. Dijamin akan pelayanan serta kecepatan pengiriman <br>
                        Seluruh paket harap video unboxing menunjukkan resi+ seluruh bagian paket hingga produk </p>
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

        <!--Produk-->
        <h1>Products</h1>
        <div class="row text-center aboutus" id="AllProducts">
            <div class="col ukLogo">
                <img src="https://i.vgy.me/B6NhmK.jpg" alt="" style="width: 200px;">
            </div>
            <div class="col">
                <img src="https://i.vgy.me/B6NhmK.jpg" alt="" style="width: 300px;">
            </div>
            <div class="col">
                <img src="https://i.vgy.me/B6NhmK.jpg" alt="" style="width: 200px;">
            </div>
        </div>
        <!--Akhir Produk-->

        <!--About us-->
        <div class="row "id="Order">
            <h1>Find Us on</h1>
            <ul class="list-unstyled">
                <li class="media mt-2">
                    <img class="mr-3" src="https://i.vgy.me/9MYQaA.png" alt="Shopee" width="100px">
                    <div class="media-body">
                        <a href="https://shopee.co.id/storexindonesia" class="btn btn-outline-warning"
                            style="color: #ff541c">Shopee</a>
                        <h5 class="mt-0 mb-1">@storexindonesia</h5>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequatur sit quasi
                        distinctio. Qui sit aperiam aspernatur. Sapiente, minus. Voluptas asperiores reiciendis nisi
                        temporibus veritatis tempora quaerat ducimus aliquam aspernatur.
                    </div>
                </li>
                <li class="media my-4">
                    <img class="mr-3" src="https://i.vgy.me/HC8MCS.png" alt="Tokopedia" width="100px">
                    <div class="media-body">
                        <a href="https://www.tokopedia.com/storex" class="btn btn-outline-success">Tokopedia</a>
                        <h5 class="mt-0 mb-1" href="https://shopee.co.id/storexindonesia">@storex</h5>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequatur sit quasi
                        distinctio. Qui sit aperiam aspernatur. Sapiente, minus. Voluptas asperiores reiciendis nisi
                        temporibus veritatis tempora quaerat ducimus aliquam aspernatur.
                    </div>
                </li>
                <li class="media">
                    <img class="mr-3 mb-4" src="https://i.vgy.me/oJEgdW.png" alt="Tiktok" width="100px">
                    <div class="media-body">
                        <a href="https://www.tiktok.com/@storexindonesia" class="btn btn-outline-dark">Tiktok</a>
                        <h5 class="mt-0 mb-1">@storexindonesia</h5>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequatur sit quasi
                        distinctio. Qui sit aperiam aspernatur. Sapiente, minus. Voluptas asperiores reiciendis nisi
                        temporibus veritatis tempora quaerat ducimus aliquam aspernatur.
                    </div>
                </li>
                <li class="media">
                    <img class="mr-3" src="https://i.vgy.me/emEfde.png" alt="WhatsApp" width="100px">
                    <div class="media-body">
                        <a href="https://www.tiktok.com/@storexindonesia" class="btn btn-outline-success">WhatsApp</a>
                        <h5 class="mt-0 mb-1">@Customer Support</h5>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequatur sit quasi
                        distinctio. Qui sit aperiam aspernatur. Sapiente, minus. Voluptas asperiores reiciendis nisi
                        temporibus veritatis tempora quaerat ducimus aliquam aspernatur.
                    </div>
                </li>
            </ul>
        </div>

        <!--Akhir About us-->


        <!--Partner-->

        <div class="" id="Partner">
            <h1>Partner</h1>
        </div>

        <!--Akhir partners-->




        <a href="https://wa.me/message/X4S4XSNV2K4LM1" target="_blank">
            <button class="btn-floating whatsapp">
                <img src="https://i.vgy.me/emEfde.png" alt="whatsApp" class="tombolwa">
                <span>(+62) 8953-4719-6765</span>
            </button>
        </a>

        <a href="#" target="">
            <button class="btn-backtotop top1 ">
                <img src="https://i.vgy.me/myrtXR.png" alt="Back to top" class="top2">
                <span>Top</span>

            </button>
        </a>

        

        {{-- Testimonial --}}
        <h2 data-text="Kata mereka" class="keren">Kata mereka</h2>
        <div class="containertesti mt-5">
            <div class="d-flex align-items-center cardstesti">
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Shopee <br> 8-12-22 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Puas</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://cf.shopee.co.id/file/c8f14f42079eef76cdfbcac317af0ad9_tn"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">BARDI Smart CCTV PTZ</div>
                                <div class="text-grey fs-5">abiwahdan</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Shopee <br> 5-12-22 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Terima kasih kak gercep kirimnyaaa</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://cf.shopee.co.id/file/8e777c3bcf76b6c0c203a88c97c423ed_tn"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">BARDI Smart CCTV Outdoor STC</div>
                                <div class="text-grey fs-5">t*****e</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Shopee <br> 4-12-22 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Fitur Terbaik:👍👍👍<br>
                            Sepadan dengan Harga:👍👍👍<br>

                            Penjual responsif... pengiriman cepat... terimakasih 👍👍👍</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">[READY TANPA PO] Bardi CCTV Outdoor Static Wifi Smart IP
                                    Camera anti air STC Smarthome</div>
                                <div class="text-grey fs-5">4bxz142__5</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Shopee <br> 4-12-22 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Pengiriman cepat, respon penjual sangat baik, ramah dan menjelaskan secara detail
                            <br>
                            Rekomended deh buat toko ini👍</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">[READY] BARDI Smart CCTV PTZ STC Indoor Outdoor GARANSI 1
                                    TAHUN</div>
                                <div class="text-grey fs-5">teguhprihan286</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Shopee <br> 2-12-22 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Sepadan dengan Harga:baju <br>
                            Fitur Terbaik:cctv <br>

                            Bagus, biar tambah aman dan pencurinya ketangkep xixixixi. Respon
                            penjual cepat dan ramah</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://cf.shopee.co.id/file/e41c138287e07f1ef94ca30770afd5e2_tn"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">BARDI Smart Indoor PTZ IP Camera CCTV 360 Wifi IoT Home
                                    Automation 1080p Full HD Surabaya</div>
                                <div class="text-grey fs-5">a*****a</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Feb 12, 2007 ⭐ ⭐ ⭐ ⭐ ⭐</span>
                    </div>
                    <div class="h5">
                        <a href="https://shopee.co.id/buyer/530528897/rating">Is CSS float depricated?</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">Author</div>
                                <div class="text-grey fs-5">Chris Coyirand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Feb 12, 2007</span>
                    </div>
                    <div class="h5">
                        <a href="#">Role of Dark Themes in modern UI</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">Author</div>
                                <div class="text-grey fs-5">Chris Coyirand</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardtesti">
                    <div class="mb-3">
                        <span class="text-grey fs-5">Review</span>
                        <span class="light-grey fs-6">on Feb 12, 2007</span>
                    </div>
                    <div class="h5">
                        <a href="#">Style Guides for Java language</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center">
                            <div class="profile">
                                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                    alt="">
                            </div>
                            <div class="ms-2">
                                <div class="light-grey fs-6">Author</div>
                                <div class="text-grey fs-5">Chris Coyirand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Akhir Testimonial --}}
    </div>
@endsection
