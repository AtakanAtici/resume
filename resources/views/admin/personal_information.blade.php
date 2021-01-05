@extends('layouts.admin')

@section('title')
    Personal Information
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Personal Information </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Personal Information</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" id="createEducationForm" action=""
                          enctype="multipart/form-data">
                        @csrf
                        <!-- Full name -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="full_name"
                                   placeholder="full_name" value="{{ $information->full_name }}">
                            @error('full_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Job -->
                        <div class="form-group">
                                <label for="job">Job</label>
                                <input type="text" name="job" class="form-control" id="job"
                                       placeholder="Job" value="{{ $information->job }}" >
                                @error('job')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task_name">Task Name</label>
                            <input type="text" name="task_name" class="form-control" id="task_name"
                                   placeholder="task Name" value="{{ $information->task_name }}" >
                            @error('task_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- İmage -->
                        <div class="form-group">
                               <div class="row">
                                   <div class="col-md-6">
                                       <label for="image">İmage</label>
                                       <input type="file" name="image" class="form-control" id="image" >
                                       @error('image')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                       @enderror
                                   </div>
                                   <div class="col-md-6">
                                       <img src="{{ asset('storage/'.$information->image) }}">
                                   </div>
                               </div>
                            </div>
                        <!-- About -->
                        <div class="form-group">
                                <label for="exampleTextarea1">About</label>
                                <textarea name="about" class="form-control" id="exampleTextarea1" rows="9">
                                    {!! $information->about !!}
                                </textarea>
                        </div>
                        <!-- Birthday -->
                        <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="text" name="birthday" class="form-control" id="birthday"
                                       placeholder="Birthday" value="{{ $information->birthday }}" >
                                @error('birthday')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <!-- email -->
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Email" value="{{ $information->email }}" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <!-- adress -->
                        <div class="form-group">
                                <label for="adress">Adress</label>
                                <input type="text" name="adress" class="form-control" id="adress"
                                       placeholder="adress" value="{{ $information->adress }}" >
                                @error('adress')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <!-- Cv -->
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="cv">Cv</label>
                                        <input type="file" name="cv" class="form-control" id="cv" >
                                        @error('cv')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                        <button type="submit" id="createButton" class="btn btn-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection