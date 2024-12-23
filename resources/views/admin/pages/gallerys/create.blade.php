@extends('admin.layout.main')
@section('title', 'Add Gallery')
@section('content')

    <div class="p-4">
        <h4>Add Gallery</h4>
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input name="name" label="gallery name" placeholder="Enter gallery name" />
            <x-input name="order" label="order" placeholder="Enter order" />
            <x-input name="image[]"  label="Select Image" type="file" placeholder="Select Image" multiple/>

            <div class="mt-3">
                <input type="submit" value="Add" class="btn btn-success">
            </div>
        </form>
    </div>

@endsection
