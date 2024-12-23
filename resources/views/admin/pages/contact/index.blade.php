@extends('admin.layout.main')
@section('title', 'Inquries')

@section('content')


    <x-admin.table :values="$contact" delete_route="inquiry.destroy" :hidden_field="['id', 'updated_at', 'created_at']" />

@endsection
