@extends('admin.layout.main')
@section('title', 'Skill')
@section('actions')
    <x-admin.modal-add-form name="addskil" title="Add Skill">

        <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="name" type="text" required="required"/>
           <x-admin.input label="Percentage" name="percentage" type="number" required="required"/>
           <x-admin.input label="Extra" name="extra" type="text" required="required"/>


            <div class="mt-5">
                <input type="submit" value="Add" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

    </x-admin.modal-add-form>
@endsection

@section('content')

    <x-admin.table :values="$skills"  edit_route="skill.edit"
                   delete_route="skill.destroy"
                   view_route="skill.show" :hidden_field="['id', 'slug', 'extra', 'created_at', 'updated_at']"/>

@endsection

