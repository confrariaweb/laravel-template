@extends('layouts.app')

@section('title', 'Templates')

@section('content')
    <x-datatable :config="$datatable"/>
@endsection