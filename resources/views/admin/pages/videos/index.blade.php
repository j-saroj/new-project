@extends('admin.layout.main')
@section('title', 'Videos')

@section('actions')
    <x-admin.modal-add-form name="addvideo" title="Add Video">

        <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p>English Data:</p>
            <x-admin.input name="title" label="Video Title" placeholder="Enter Video title" />
                </div>
                <div class="col-lg-6 col-12">
                    <p>नेपाली डाटा:</p>
                    <x-admin.input name="nepali_title" label="ग्यालरी नाम"
                                   placeholder="ग्यालरीको नाम प्रविष्ट गर्नुहोस्"/>
                </div>
            </div>
            <x-admin.input name="link" label="Video Link" placeholder="Enter Video Link" />

            <x-admin.select-input name="type" label="Type" :values="$type" />

            <x-admin.select-input name="source" label="Source" :values="$source" />

            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')



    <x-admin.table :values="$video" edit_route="video.edit" view_route="video.show" delete_route="video.destroy"
        :hidden_field="['id', 'slug', 'created_at', 'updated_at']" status_route="video.status" />

@endsection
