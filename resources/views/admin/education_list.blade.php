@extends('layouts.admin')

@section('title')
    Education Information
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Education List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Education List</li>
            </ol>
            <div class="col-md-12 mt-1">
                <a class="nav-link btn btn-success create-new-button"  href="{{ route('admin.education.add') }}">+ Add New Education</a>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>School Name</th>
                                <th>Department</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($list as $item)
                                    <?php
                                            $status=0;
                                    if($item->status == 1)
                                        {
                                            $status="Active";
                                        }
                                    else
                                        {
                                            $status ="Not Active";
                                        }
                                    ?>

                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->education_date }}</td>
                                    <td>{{ $item->school_name }}</td>
                                    <td>{{ $item->education_department }}</td>
                                    <td>{{ $status }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> </div>
@endsection

@section('js')
@endsection