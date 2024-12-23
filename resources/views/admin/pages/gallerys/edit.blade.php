@extends('admin.layout.main')
@section('title', 'Edit Gallery')
@section('content')

    <div class="p-4">
        <h4>Edit Gallery</h4>
        <form action="{{ route('gallery.update', ['gallery' => $gallery->id]) }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <p>English Data:</p>
                    <x-admin.input name="name" label="gallery name" placeholder="Enter gallery name"
                                   :oldvalue="$gallery->name"/>
                </div>
                <div class="col-lg-6 col-12">
                    <p>नेपाली डाटा:</p>
                    <x-admin.input name="nepali_name" label="ग्यालरी नाम"
                                   placeholder="ग्यालरीको नाम प्रविष्ट गर्नुहोस्" :oldvalue="$gallery->nepali_name"/>
                </div>
            </div>
            <x-admin.input name="order" label="order" placeholder="Enter order" :oldvalue="$gallery->order"/>
            <p class="mt-4">Existing Images</p>
            <div class="ms-5 my-3">
                @foreach ($gallery->image as $image)
                    {{-- <img src="{{ asset('storage/' . $image->image) }}" height="200px" width="auto" class="px-3"
                        alt="" srcset=""> --}}
                    <div class="mt-2 row">
                        <div class="col-9">
                            <img src="{{ asset('storage/' . $image->image) }}" height="200px" width="auto" class="px-3"
                                 alt="" srcset="">
                        </div>
                        <div class="col-3">
                            @php
                                $modelClassName = get_class($gallery);
                            @endphp
                            <a href="{{ route('detach.image', ['model_type' => $modelClassName, 'model_id' => $gallery->id, 'image' => $image->id]) }}"
                               class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <x-admin.input type="file" name="image" label="Select Image"/>

            <input type="submit" value="Update" class="btn btn-success">

        </form>
    </div>

@endsection
