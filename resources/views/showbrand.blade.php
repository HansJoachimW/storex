@extends('layouts.main')

@section('container')
    <h1 class="font_sen_700 text-start p-5" style="margin-top: 30px;">Brand Details</h1>

    <div class="mx-5 row">
        <div class="col-2 m-5">
            <img src="/images/{{ $brand->image }}" class="d-block rounded-3" width="200">
        </div>
        <div class="col-6 m-5">
            <h2 class="font_sen_700">Name: <p class="font_sen_400">{{ $brand->brand_name }}</p>
            </h2>
            <h3 class="font_sen_700">Origin: <p class="font_sen_400">{{ $brand->origin }}</p>
            </h3>
            <button class="rounded-pill"><a class="text-decoration-none text-reset font_sen_400" aria-current="page"
                    href="/">Back</a></button>
        </div>
    </div>
@endsection
