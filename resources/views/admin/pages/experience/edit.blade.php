@extends('admin.layout.main')
@section('title', 'Experience')

@section('content')

    <form action="{{ route('experience.update',['experience'=>$experience]) }}" method="post" enctype="multipart/form-data">
        @csrf
       <x-admin.input label="Name" name="title" type="text" required="required" :oldvalue="$experience->title"/>
       <textarea class="mt-5" name="description" id="description" cols="30" rows="10">{{$experience->description }}</textarea>
      <x-admin.input label="Start Date" name="start_date" type="date"  required="required" :oldvalue="$experience->start_date"/>
        <x-admin.input label="End Date" name="end_date" type="date"  required="required" :oldvalue="$experience->end_date"/>

        <div class="mt-5">
            <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
        </div>
@endsection
