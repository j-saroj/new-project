@extends('admin.layout.main')
@section('title', 'Award')
@section('content')

        <form action="{{ route('award.update',['award'=>$award]) }}" method="post" enctype="multipart/form-data">
            @csrf
           <x-admin.input label="Name" name="title" type="text" required="required" :oldvalue="$award->title" />
           <textarea class="mt-5" name="description" id="description" cols="30" rows="10">{{ $award->description }}</textarea>
           <x-admin.input label="Date" name="date" :oldvalue="$award->date" type="date"  required="required"/>



            <div class="mt-5">
                <input type="submit" value="Update" class="btn btn-success px-4 py-2 ">
            </div>
        </form>

@endsection
