@extends('admin.layout.main')
@section('title', 'Award')
@section('actions')
    <x-admin.modal-add-form name="addaward" title="Add Award">

        <form action="{{ route('award.store') }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="title" type="text" required="required"/>
           <textarea class="mt-5" name="description" id="description" cols="30" rows="10"></textarea>
           <x-admin.input label="Date" name="date" type="date"  required="required"/>



            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')
    <x-admin.table :values="$awards"  edit_route="award.edit"
                   delete_route="award.destroy"
                   view_route="award.show" status_route="award.change_status" :hidden_field="['status','id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection

