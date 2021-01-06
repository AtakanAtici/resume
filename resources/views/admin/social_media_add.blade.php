@extends('layouts.admin')
<?php
    $title="Add New Social Media Account";
    if($socialMedia)
    {
        $title="Update Account";
    }

?>
@section('title')
    Add New Social Media Account
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> {{ $title }} </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" id="createExperienceForm" action="">
                        @csrf
                        @if($socialMedia)
                            <input type="hidden" name="socialMediaID" value="{{ $socialMedia->id }}">
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Experience Date (exp:2006-2019)" value="{{ $socialMedia ? $socialMedia->name : ''}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="task_name">link</label>
                            <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="{{ $socialMedia ? $socialMedia->link : '' }}">
                            @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon">icon</label>
                            <input type="text" name="icon" class="form-control" id="icon" placeholder="İcon" value="{{ $socialMedia ? $socialMedia->icon : '' }}">
                            @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <?php
                                if ($socialMedia)
                                {
                                    $checkStatus=$socialMedia->status ? "checked" : '';
                                }
                                else
                                {
                                    $checkStatus='';
                                }

                                ?>
                                <input type="checkbox" name="status" id="status" class="form-check-input" {{ $checkStatus }}>
                                Show on page
                            </label>
                        </div>
                        <button type="submit" id="createButton" class="btn btn-primary mr-2">Save</button>
                        <a class="btn btn-dark" href="{{ route('admin.socialMedia.list') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection