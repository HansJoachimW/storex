@extends('layouts.main')

@section('container')
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Origin</label>
            <input type="text" name="origin" class="form-control">
            @if ($errors->has('origin'))
                <p class="text-danger">{{ $errors->first('origin') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Logo</label>
            <input type="file" name="logo" class="form-control">
            @if ($errors->has('logo'))
                <p class="text-danger">{{ $errors->first('logo') }}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
@endsection
