@extends('admin.layout.main')
@section('title', 'Add Organization')
@section('content')
<div class="p-4">

    <h4>Add Organization</h4>
    <form action="{{ route('organization.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin.input name="name" label="Full name" placeholder="Enter Full Name" />
        <x-admin.input name="address" label="Address" placeholder="Enter Address" />
        <x-admin.input name="phone" label="Phone" placeholder="Enter Phone"  />
        <x-admin.input name="website" label="Website" placeholder="Enter Website" />
        <x-admin.input name="description" label="Description" placeholder="Enter Description" />
        <x-admin.input name="motto" label="Motto" placeholder="Enter Motto" />
        <x-admin.input name="title" label="Title" placeholder="Enter Homepage Title" />
        <x-admin.input name="sublitle" label="Sub Title" placeholder="Enter Homepage Sub-Title" />
            <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="15">{{ old('description') }}</textarea>


        <x-admin.input name="email" label="Email" placeholder="Enter email" />
        <x-admin.input type="file" name="logo" label="Logo" placeholder="Select Logo" />
        <x-admin.input type="file" name="banner_image" label="BannerImage" placeholder="Select Banner Image" />

        <p class="mt-5 text-muted">Social Links</p>
        <x-admin.input  name="facebook" label="Facebook" placeholder="Enter Facebook Profile Link" />
        <x-admin.input  name="instagram" label="Instagram" placeholder="Enter Instagram Profile Link" />
        <x-admin.input  name="linkedin" label="Linkedin" placeholder="Enter Linkedin Profile Link" />
        <x-admin.input  name="twitter" label="Twitter" placeholder="Enter Twitter Profile Link" />
        <x-admin.input  name="extra" label="Extra" placeholder="Enter Any Other " />

        <div class="mt-3">
            <input type="submit" value="Add" class="btn btn-success">
        </div>
    </form>
</div>

@endsection
