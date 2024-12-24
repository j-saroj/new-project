@extends('admin.layout.main')
@section('title', 'Gallery')
@section('actions')
    <x-admin.modal-add-form name="addgallery" title="Add Gallery">

        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <x-admin.input name="title" label="Gallery Name" placeholder="Enter gallery name" />
            <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="15">{{ old('description') }}</textarea>
            <x-admin.select-input name="portfolio_id" label="Select Portfolio" :values="$portfolios" />
            <x-admin.input name="image" label="Select Image" multiple type="file" placeholder="Select Image" />

            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$gallerys" status_route="gallery.status" edit_route="gallery.edit" delete_route="gallery.destroy"
        view_route="gallery.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']" />

@endsection
