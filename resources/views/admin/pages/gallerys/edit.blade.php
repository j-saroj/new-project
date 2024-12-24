@extends('admin.layout.main')
@section('title', 'Gallery')
@section('content')

        <form action="{{ route('gallery.update',['gallery'=>$gallery]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.select-input name="portfolio_id" label="Select Portfolio" :data="$data" :values="$portfolios" />
            <x-admin.input name="image" label="Select Image"  type="file" placeholder="Select Image" />

            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

@endsection
