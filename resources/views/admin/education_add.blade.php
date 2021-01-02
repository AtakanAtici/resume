@extends('layouts.admin')

@section('title')
    Add New Education
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
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" id="createEducationForm" action="">
                        @csrf
                        <div class="form-group">
                            <label for="education_date">Education Date</label>
                            <input type="text" name="education_date" class="form-control" id="education_date" placeholder="education date (exp: 2001 - 2007) ">
                            @error('education_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="school_name">School Name</label>
                            <input type="text" name="school_name" class="form-control" id="school_name" placeholder="School Name">
                            @error('school_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education_department">Department</label>
                            <input type="text" name="education_department" class="form-control" id="education_department" placeholder="Department">
                            @error('education_department')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education_explanation">Explanation</label>
                            <textarea class="form-control" name="education_explanation" id="education_explanation" rows="4"></textarea>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="status" id="status" class="form-check-input"> Show on page  </label>
                        </div>
                        <button type="button" id="createButton" class="btn btn-primary mr-2">Save</button>
                        <button class="btn btn-dark">Cancel</button>
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