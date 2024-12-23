@extends('admin.layout.main')
@section('title', 'Gallery')
@section('actions')
    <x-admin.modal-add-form name="addblog" title="Add Blog">

        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p>English Data:</p>
                    <x-admin.input name="name" label="Gallery Name" placeholder="Enter gallery name"/>
                </div>
                <div class="col-lg-6 col-12">
                    <p>नेपाली डाटा:</p>
                    <x-admin.input name="nepali_name" label="ग्यालरी नाम"
                                   placeholder="ग्यालरीको नाम प्रविष्ट गर्नुहोस्"/>
                </div>
            </div>

            <x-admin.input name="order" label="Order" placeholder="Enter order"/>
            <x-admin.input name="image[]" label="Select Image" multiple type="file" placeholder="Select Image"/>

            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$gallerys" status_route="gallery.status" edit_route="gallery.edit"
                   delete_route="gallery.destroy"
                   view_route="gallery.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection
