@extends('layouts.admin')

<?php
        $title="Add New Education";
    if($education)
    {
        $title="Update Education";
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
                    <form class="forms-sample" method="POST" id="createEducationForm" action="">
                        @csrf
                        @if($education)
                            <input type="hidden" name="educationID" value="{{ $education->id }}">
                        @endif
                        <div class="form-group">
                            <label for="education_date">Education Date</label>
                            <input type="text" name="education_date" class="form-control" id="education_date"
                                   placeholder="education date (exp: 2001 - 2007)" value="{{ $education ? $education->education_date : ''}}">
                            @error('education_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="school_name">School Name</label>
                            <input type="text" name="school_name" class="form-control" id="school_name" placeholder="School Name" value="{{ $education ? $education->school_name : '' }}">
                            @error('school_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education_department">Department</label>
                            <input type="text" name="education_department" class="form-control" id="education_department" placeholder="Department" value="{{ $education ? $education->education_department : '' }}">
                            @error('education_department')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education_explanation">Explanation</label>
                            <textarea class="form-control" name="education_explanation" id="education_explanation" rows="4">{{ $education ? $education->education_explanation : '' }}</textarea>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <?php
                                if ($education)
                                    {
                                        $checkStatus=$education->status ? "checked" : '';
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
                        <a class="btn btn-dark" href="{{ route('admin.education.list') }}">Cancel</a>
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
           if ($('#education_date').val().trim()=='')
           {
               Swal.fire({
                   icon: 'error',
                   title: 'Ops...',
                   text: 'Please check your Education Date!',
                   confirmButtonText:'OK'
               });
           }
            else if ($('#school_name').val().trim()=='')
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Please check your School Name!',
                    confirmButtonText:'OK'
                });
            }
           else if ($('#education_department').val().trim()=='')
           {
               Swal.fire({
                   icon: 'error',
                   title: 'Ops...',
                   text: 'Please check your Education Department!',
                   confirmButtonText:'OK'
               });
           }
           else
           {
               $('#createEducationForm').submit();
           }
        });
    </script>
@endsection