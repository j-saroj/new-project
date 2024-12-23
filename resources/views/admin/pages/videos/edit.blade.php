@extends('admin.layout.main')
@section('title', 'Edit Video')
@section('content')
    <div class="p-4">
        <h4>Edit Video</h4>
        <form action="{{ route('video.update', [$video->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p>English Data:</p>
            <x-admin.input name="title" label="Video Title" placeholder="Enter video title" :oldvalue="$video->title" />
                </div>
                <div class="col-lg-6 col-12">
                    <p>नेपाली डाटा:</p>
                    <x-admin.input name="nepali_title" label="भिडियो शीर्षक" placeholder="भिडियो शीर्षक प्रविष्ट गर्नुहोस्" :oldvalue="$video->nepali_title" />
                </div>
            </div>
            <x-admin.input name="link" label="Video Link" placeholder="Enter Video Link" :oldvalue="$video->link" />

            <x-admin.select-input name="type" label="Type" :values="$type" :data="$video->type" />

            <x-admin.select-input name="source" label="Source" :values="$source" :data="$video->source" />

            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>
    </div>

@endsection
