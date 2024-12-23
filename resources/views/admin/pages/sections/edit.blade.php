@extends('admin.layout.main')
@section('title', 'Edit section')
@section('content')
    <div class="p-4">
        <h4>Edit section</h4>
        <form action="{{ route('section.update', [$section->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.select-input name="portfolio" label="Portfolio" :values="$portfolio" :data="$section->portfolio->id" />
            <x-admin.input name="title" label="Title" :oldvalue="$section->title" />
            <x-admin.input type="number" name="order" label="Order" :oldvalue="$section->order" />


            <p class="mt-3">Description</p>
            <textarea class="form-control" name="description" id="description" rows="5">{{ old('', $section->description) }}</textarea>

            <p class="mt-4">Existing Images</p>
            <div class="ms-5 my-3">
                @foreach ($section->image as $image)
                    <div class="mt-2 row">
                        <div class="col-9">
                            <img src="{{ asset('storage/' . $image->image) }}" height="200px" width="auto" class="px-3"
                                alt="" srcset="">
                        </div>
                        <div class="col-3">
                            @php
                                $modelClassName = get_class($section);
                            @endphp
                            <a href="{{ route('detach.image', ['model_type' => $modelClassName, 'model_id' => $section->id, 'image' => $image->id]) }}"
                                class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <x-admin.input name="image[]" label="Select Image" multiple type="file" placeholder="Select Image" />

            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>
    </div>

@endsection
