@extends('admin.layout.main')
@section('title', 'Gallery')
@section('content')

    <x-admin.table-view :values="$value" edit_route="gallery.edit" delete_route="gallery.destroy" label="gallery" />


@endsection
