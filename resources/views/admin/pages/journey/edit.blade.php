@extends('admin.layout.main')
@section('title', 'Journey')
@section('content')

        <form action="{{ route('journey.update',['journey'=>$journey]) }}" method="post" enctype="multipart/form-data">
            @csrf

            <x-admin.input name="title" label="Journey Name" placeholder="Enter journey name" :oldvalue="$journey->title" />
            <x-admin.input name="count" label="Count" placeholder="Enter count" :oldvalue="$journey->count" />
            <x-admin.input name="icon" label="Icon" placeholder="Enter icon eg: fa-heart" :oldvalue="$journey->icon" />

            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>


@endsection
