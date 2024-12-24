@extends('admin.layout.main')
@section('title', 'Section')

@section('actions')



    <x-admin.modal-add-form name="addsection" title="Add section">

        <form action="{{ route('section.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <x-admin.select-input name="portfolio" label="Portfolio" :values="$portfolio" />
            <x-admin.input name="title" label="Title"  />
            <x-admin.input type="number" name="order" label="Order" />
            <div class = 'form-group mt-3'>
                <label for="title">Title</label>
                <select name="title" id="title" class="form-control">
                    <option>Select Title</option>
                    <option value="the-challenge">The Challenge</option>
                    <option value="our-approach">Our Approach</option>
                    <option value="the-solution">The Solution</option>
                    <option value="result">The Result</option>
                </select>
            </div>



            <p class="mt-3">Description</p>
            <textarea class="form-control" name="description" id="description" placeholder="Enter section description"
                rows="15">{{ old('description') }}</textarea>

            <x-admin.input name="image[]" label="Select Image"  type="file" placeholder="Select Image" />

            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>
    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$section" edit_route="section.edit" view_route="section.show" delete_route="section.destroy"
        :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']" status_route="section.status" />

@endsection
