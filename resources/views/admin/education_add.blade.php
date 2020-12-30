@extends('layouts.admin')

@section('title')
    Welcome
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Add New Education </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Education</li>
            </ol>
        </nav>
    </div>
@endsection

@section('js')
@endsection