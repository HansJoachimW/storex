@extends('layouts.main')

@section('container')
    <form action="{{ route('brands.update', $brand) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $brand->brand_name }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div><div class="mb-3">
            <label for="">Logo</label>
            <br>
            <img src="{{ asset('storage/' . $brand->logo) }}" alt="">
            <input type="file" name="logo" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Origin</label>
            <input type="text" name="origin" class="form-control" value="{{ $brand->origin }}">
            @if ($errors->has('origin'))
                <p class="text-danger">{{ $errors->first('origin') }}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
@endsection
