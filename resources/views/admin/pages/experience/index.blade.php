@extends('admin.layout.main')
@section('title', 'Experience')
@section('actions')
    <x-admin.modal-add-form name="addexperience" title="Add Experience">

        <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="title" type="text" required="required"/>
           <textarea class="mt-5" name="description" id="description" cols="30" rows="10"></textarea>
           <x-admin.input label="Start Date" name="start_date" type="date"  required="required"/>
              <x-admin.input label="End Date" name="end_date" type="date"  required="required"/>


            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')
    <x-admin.table :values="$experiences"  edit_route="experience.edit"
                   delete_route="experience.destroy"
                   view_route="experience.show" status_route="experience.change_status" :hidden_field="['status','id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection

