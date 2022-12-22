@extends('layouts.main')

@section('container')
    <div class="m-5" style="width: 90% ">
        <h1 class="navbar-brand mr-5 btn btn-outline" style="font-size: 30px">Create new Products</h1>
        
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="">Category</label>
                <input type="text" name="category" class="form-control">
                @if ($errors->has('category'))
                    <p class="text-danger">{{ $errors->first('category') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control">
                @if ($errors->has('price'))
                    <p class="text-danger">{{ $errors->first('price') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="">Stock</label>
                <input type="text" name="stock" class="form-control">
                @if ($errors->has('stock'))
                    <p class="text-danger">{{ $errors->first('stock') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
                @if ($errors->has('image'))
                    <p class="text-danger">{{ $errors->first('image') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="">Brand Name</label>
                <select name="brand_id" id="" class="form-select">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
@endsection
