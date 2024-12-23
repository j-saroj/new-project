@extends('admin.layout.main')
@section('title', 'Edit Organization')
@section('content')

    <h4>Add Organization</h4>
    <form action="{{ route('organization.update', [$organization->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin.input name="name" label="Full name" placeholder="Enter Full Name" :oldvalue="$organization->name" />
        <x-admin.input name="address" label="Address" placeholder="Enter Address" :oldvalue="$organization->address" />
        <x-admin.input name="phone" label="Phone" placeholder="Enter Phone" :oldvalue="$organization->phone" />
        <x-admin.input name="website" label="Website" placeholder="Enter Website" :oldvalue="$organization->website" />
        {{-- <x-admin.input name="description" label="Description" placeholder="Enter Description" --}}
            {{-- value="{{ $organization->description }}" /> --}}
        <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="15">
                @isset($organization->description)
{{ old('description', $organization->description) }}
@endisset
            </textarea>

            <div class="mt-2 row">
                        <div class="col-9">
                            <img src="{{ asset('storage/' . $organization->logo) }}" height="200px" width="auto" class="px-3"
                                alt="" srcset="">
                        </div>
                        <div class="col-3">
                            @php
                                $modelClassName = get_class($organization);
                            @endphp
                            <a href="{{ route('detach.image', ['model_type' => $modelClassName, 'model_id' => $setting->id, 'image' => $image->id]) }}"
                                class="btn btn-danger">Delete</a>
                        </div>
                    </div>
        <x-admin.input name="motto" label="Motto" placeholder="Enter Motto" :oldvalue="$organization->motto" />
        <x-admin.input name="title" label="Title" placeholder="Enter Homepage Title" :oldvalue="$organization->title" />
        <x-admin.input name="sublitle" label="Sub Title" placeholder="Enter Homepage Sub-Title" :oldvalue="$organization->sublitle" />


        <x-admin.input name="email" label="Email" placeholder="Enter email" :oldvalue="$organization->email" />
        <x-admin.input type="file" name="logo" label="Logo" placeholder="Select Logo" :oldvalue="$organization->logo" />
        <x-admin.input type="file" name="banner_image" label="BannerImage" placeholder="Select Banner Image"
            :oldvalue="$organization->name" />

        <p class="mt-5 text-muted">Social Links</p>
        <x-admin.input name="facebook" label="Facebook" placeholder="Enter Facebook Profile Link" :oldvalue="$organization->facebook" />
        <x-admin.input name="instagram" label="Instagram" placeholder="Enter Instagram Profile Link" :oldvalue="$organization->instagram" />
        <x-admin.input name="linkedin" label="Linkedin" placeholder="Enter Linkedin Profile Link" :oldvalue="$organization->linkedin" />
        <x-admin.input name="twitter" label="Twitter" placeholder="Enter Twitter Profile Link" :oldvalue="$organization->twitter" />
        <x-admin.input name="extra" label="Extra" placeholder="Enter Any Other " :oldvalue="$organization->extra" />

        <div class="mt-3">
            <input type="submit" value="Add" class="btn btn-success">
        </div>
    </form>
    </div>

@endsection
