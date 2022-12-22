@extends('layouts.main')

@section('container')
    <h1 class="font_sen_700 text-start p-5" style="margin-top: 30px;">Product Details</h1>

    <div class="mx-5 row">
        <div class="col-2 m-5">
            <img src="/images/{{ $product->image }}" class="d-block rounded-3" width="200">
        </div>
        <div class="col-6 m-5">
            <h2 class="font_sen_700">Name: <p class="font_sen_400">{{ $product->name }}</p>
            </h2>
            <h3 class="font_sen_700">Category: <p class="font_sen_400">{{ $product->category }}</p>
            </h3>
            <h3 class="font_sen_700">Price: <p class="font_sen_400">{{ $product->price }}</p>
            </h3>
            <h3 class="font_sen_700">Stock: <p class="font_sen_400">{{ $product->stock }}</p>
            </h3>
            <h3 class="font_sen_700">Brand: <p class="font_sen_400">
                    @php
                        switch ($product->brand_id) {
                            case 1:
                                echo 'BARDI';
                                break;
                            case 2:
                                echo 'Logitech';
                                break;
                            case 3:
                                echo 'Fantech';
                                break;
                            case 4:
                                echo 'StoreX';
                                break;
                            case 5:
                                echo 'Rexus';
                                break;
                            case 6:
                                echo 'Thronmax';
                                break;
                            case 7:
                                echo 'AFTO';
                                break;
                            case 8:
                                echo 'Glass Pro';
                                break;
                            case 9:
                                echo 'Vention';
                                break;
                            case 10:
                                echo 'Baseus';
                                break;
                            case 11:
                                echo 'Avaro';
                                break;
                            case 12:
                                echo 'SanDisk';
                                break;
                            case 13:
                                echo 'Fimi';
                                break;
                            case 14:
                                echo 'Yesoul';
                                break;
                            case 15:
                                echo 'Redragon';
                                break;
                            case 16:
                                echo 'Advance Digitals';
                                break;
                            case 17:
                                echo 'Robolife';
                                break;
                            case 18:
                                echo 'Welhome';
                                break;
                            case 19:
                                echo 'Advan';
                                break;
                            case 20:
                                echo 'EviniX';
                                break;
                            case 21:
                                echo 'Matrix';
                                break;
                            case 22:
                                echo 'Luby';
                                break;  
                        }
                    @endphp
                </p>
            </h3>
            <button class="rounded-pill"><a class="text-decoration-none text-reset font_sen_400" aria-current="page"
                    href="/">Back</a></button>
        </div>
    </div>
@endsection
