@extends('admin.layout.main')
@section('title', 'Portfolio')
@section('actions')
    <x-admin.modal-add-form name="addskil" title="Add Portfolio">

        <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="title" type="text" required="required"/>
           <x-admin.input label="Percentage" name="percentage" type="number" required="required"/>
           <div class="mt-2">
            <label for="description">Description</label>
               <textarea class="mt-5" name="description" id="description" cols="30" rows="10"></textarea>
           </div>
           <x-admin.select-input label="Category" name="category_id" :values="$categories" required="required"/>
           <x-admin.input label="Image" name="image" type="file"  required="required"/>


            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$portfolios"  edit_route="portfolio.edit"
                   delete_route="portfolio.destroy"
                   view_route="portfolio.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection

