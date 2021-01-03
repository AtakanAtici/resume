@extends('layouts.admin')

<?php
        $title="Add New Experience";
    if($experience)
    {
        $title="Update Experience";
    }

?>
@section('title')
    {{ $title }}
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
                        @if($experience)
                            <input type="hidden" name="experienceID" value="{{ $experience->id }}">
                        @endif
                        <div class="form-group">
                            <label for="date">Education Date</label>
                            <input type="text" name="date" class="form-control" id="date"
                                   placeholder="Experience Date (exp:2006-2019)" value="{{ $experience ? $experience->date : ''}}">
                            @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="task_name">Task Name</label>
                            <input type="text" name="task_name" class="form-control" id="task_name" placeholder="Task Name" value="{{ $experience ? $experience->task_name : '' }}">
                            @error('task_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="company">company</label>
                            <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="{{ $experience ? $experience->company : '' }}">
                            @error('company')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4">{{ $experience ? $experience->description : '' }}</textarea>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <?php
                                if ($experience)
                                    {
                                        $checkStatus=$experience->status ? "checked" : '';
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
                        <button type="button" id="createButton" class="btn btn-primary mr-2">Save</button>
                        <a class="btn btn-dark" href="{{ route('admin.experience.list') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        let createButton=$("#createButton");
        createButton.click(function () {
           if ($('#date').val().trim()=='')
           {
               Swal.fire({
                   icon: 'error',
                   title: 'Ops...',
                   text: 'Please check your Experience Date!',
                   confirmButtonText:'OK'
               });
           }
            else if ($('#task_name').val().trim()=='')
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Please check your Task Name!',
                    confirmButtonText:'OK'
                });
            }
           else if ($('#company').val().trim()=='')
           {
               Swal.fire({
                   icon: 'error',
                   title: 'Ops...',
                   text: 'Please check your Company Name!',
                   confirmButtonText:'OK'
               });
           }
           else
           {
               $('#createExperienceForm').submit();
           }
        });
    </script>
@endsection