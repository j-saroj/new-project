@extends('admin.layout.main')
@section('title', 'Portfolio Category')
@section('content')
{{-- {{ route('gallery.update', ['gallery' => $gallery->id]) }} --}}

        <form action="{{ route('portfoliocategory.update', ['portfoliocategory'=>$category]) }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="name" type="text" required="required" :oldvalue="$category" />

            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

@endsection
