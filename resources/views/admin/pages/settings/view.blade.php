@extends('admin.layout.main')
@section('title','Setting')
@section('content')

    <x-admin.table-view :values="$value" edit_route="settings.edit"  label="Setting" />

@endsection
