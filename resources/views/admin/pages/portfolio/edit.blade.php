@extends('admin.layout.main')
@section('title', 'Portfolio')
@section('content')
    <form action="{{ route('portfolio.update', ['portfolio' => $portfolio]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin.input label="Name" name="title" type="text" required="required" :oldvalue="$portfolio->title" />
        <div class="mt-2">
            <label for="description">Description</label>
            <textarea class="mt-5" name="description" id="description" cols="30" rows="10">{{ $portfolio->description }}</textarea>
        </div>
        <x-admin.select-input label="Category" name="category_id" :data="$data" :values="$categories" required="required" />
        <x-admin.input label="Image" name="image" type="file" required="required" />
        <div class="mt-2">
            <label for="existing_image">Existing Image</label>
            <img src="{{ asset('storage/' . $portfolio->image) }}" height="200" width="200" alt="Existing Image" class="img-fluid">
        </div>

        <div class="mt-5">
            <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
        </div>
    </form>

@endsection
