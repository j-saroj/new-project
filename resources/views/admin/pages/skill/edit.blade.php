@extends('admin.layout.main')
@section('title', 'Skill')
@section('content')

        <form action="{{ route('skill.update',['skill'=> $skill]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Name" name="name" type="text" required="required" :oldvalue="$skill->name" />
            <x-admin.input label="Percentage" name="percentage" type="number" required="required" :oldvalue="$skill->percentage" />
            <x-admin.input label="Extra" name="extra" type="text" required="required" :oldvalue="$skill->extra" />


            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

@endsection


