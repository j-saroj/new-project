@extends('admin.layout.main')
@section('title', 'Portfolio')
@section('content')
    {{ dd($portfolio) }}
        <form action="{{ route('portfolio.update',['portfolio'=>$portfolio]) }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="title" type="text" required="required" :oldvalue="$portfolio->title"/>
           <textarea class="mt-5" name="description" id="description" cols="30" rows="10">{{$portfolio->description }}</textarea>
           <x-admin.select-input label="Category" name="category_id" :data="$data"  :values="$categories" required="required"/>
           <x-admin.input label="Image" name="image" type="file" multiple required="required"/>
           <x-admin.input label="Extra" name="extra" type="text" required="required"/>


            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

@endsection


