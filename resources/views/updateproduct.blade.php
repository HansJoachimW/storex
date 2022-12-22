@extends('layouts.main')

@section('container')
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Category</label>
            <input type="text" name="category" class="form-control" value="{{ $product->category }}">
            @if ($errors->has('category'))
                <p class="text-danger">{{ $errors->first('category') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Stock</label>
            <input type="text" name="stock" class="form-control" value="{{ $product->stock }}">
            @if ($errors->has('stock'))
                <p class="text-danger">{{ $errors->first('stock') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <br>
            <img src="{{ asset('storage/' . $product->image) }}" alt="">
            <input type="file" name="image" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Brand ID</label>
            <input type="text" name="brand_id" class="form-control" value="{{ $product->brand_id }}" readonly>
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
@endsection
