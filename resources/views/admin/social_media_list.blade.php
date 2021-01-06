@extends('layouts.admin')

@section('title')
    Social Media Accounts
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Sosyal Medya Hesapları </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Media</li>
            </ol>
            <div class="col-md-12 mt-1">
                <a class="nav-link btn btn-success create-new-button"  href="{{ route('admin.socialMedia.addShow') }}">+ Add new Account</a>
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
                                <th>Name</th>
                                <th>Link</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($list as $item)
                                <?php
                                $status=0;
                                $buttonClass="btn-danger";
                                if($item->status == 1)
                                {
                                    $status="Active";
                                    $buttonClass="btn-success";
                                }
                                else
                                {
                                    $status ="disable";
                                }
                                ?>

                                <tr id="{{ $item->id }}">
                                    <td>{{ $item->order }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td><a data-id="{{ $item->id }}" class="btn {{ $buttonClass }} changeStatus" href="javascript:void(0)">{{ $status }}</a></td>
                                    <td>
                                        <a data-id="{{ $item->id }}" href="{{ route('admin.socialMedia.addShow', ['socialMediaID' => $item->id]) }}" class="btn btn-warning text-center editEducation">
                                            <i class="fa fa-edit"> Düzenle</i>
                                        </a>
                                    </td>
                                    <td>
                                        <a data-id="{{ $item->id }}" href="javascript:void(0)" class="btn btn-danger text-center deleteEducation">
                                            <i class="fa fa-trash"> Sil</i>
                                        </a>
                                    </td>
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