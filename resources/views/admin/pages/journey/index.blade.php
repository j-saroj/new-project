@extends('admin.layout.main')
@section('title', 'Journey')
@section('actions')
    <x-admin.modal-add-form name="addjourney" title="Add Journey">

        <form action="{{ route('journey.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <x-admin.input name="title" label="Journey Name" placeholder="Enter journey name" />
            <x-admin.input name="count" label="Count" placeholder="Enter count" />
            <x-admin.input name="icon" label="Icon" placeholder="Enter icon eg: fa-heart" />
            <div>
                <p>Find Icons: <a href="https://fontawesome.com/icons?d=gallery&m=free"
                        target="_blank">https://fontawesome.com/icons?d=gallery&m=free</a></p>
            </div>
            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection
@section('content')
    <x-admin.table :values="$journeys" status_route="journey.status" edit_route="journey.edit" delete_route="journey.destroy"
        view_route="journey.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']" />
@endsection
