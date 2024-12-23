@extends('admin.layout.main')
@section('title',"Settings")

@section('content')


    <x-admin.table :values="$settings" add_route="settings.create" view_route="settings.show" edit_route="settings.edit"  :hidden_field="['id','extra','updated_at','created_at']" />

@endsection
