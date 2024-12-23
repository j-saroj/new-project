@extends('admin.layout.main')
@section('title', 'Add service')
@section('content')
    <div class="p-4">

        <h4>Add service</h4>
        <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input name="name" label="service Name" placeholder="Enter service Name" />
           
            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>
    </div>

@endsection
