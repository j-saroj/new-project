@extends('admin.layout.main')
@section('title', 'Add Setting')
@section('content')
    <div class="p-4">

        <h4>Add Setting</h4>
        <form action="{{ route('settings.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <label for="page">Page</label>
                <select name="page" id="" class="form-select">
                    <option value="home">Home</option>
                    <option value="aboutus">About Us</option>
                    <option value="campuslife">Campus Life</option>
                    <option value="contactus">Contact Us</option>
                </select>
            </div>
            <x-admin.input name="display_name" label="Display Name" placeholder="Enter name" />
            <div class="mt-4">
                <label for="value" class="form-label">Value</label>
                <textarea name="value" id="value" class="form-control" cols="10"> {{ old('value') }}</textarea>
            </div>
            <p class="mt-3">Description</p>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="15">{{ old('description') }}</textarea>
            <div class="mt-3 form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image[]" multiple id="image" class="form-control">
            </div>
            <div class="mt-3">
                <input type="submit" value="Add" class="btn btn-success">
            </div>
        </form>
    </div>

@endsection
