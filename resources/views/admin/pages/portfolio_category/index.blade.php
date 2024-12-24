@extends('admin.layout.main')
@section('title', 'Portfolio Category')
@section('actions')
    <x-admin.modal-add-form name="addcategory" title="Add Category">

        <form action="{{ route('portfoliocategory.store') }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="name" type="text" required="required"/>

            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$categories"  edit_route="portfoliocategory.edit"
                   delete_route="portfoliocategory.destroy"
                   view_route="portfoliocategory.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection

