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
                                <th>School Name</th>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Status</th>
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

                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->school_name }}</td>
                                    <td>{{ $item->education_date }}</td>
                                    <td>{{ $item->education_department }}</td>
                                    <td><a data-id="{{ $item->id }}" class="btn {{ $buttonClass }} changeStatus" href="javascript:void(0)">{{ $status }}</a></td>
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
    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr("content")
            }
        });

        $('.changeStatus').click(function () {
          //let educationID = $(this).data('id');
            let educationID = $(this).attr('data-id');
            let self = $(this);

            $.ajax({
               url: "{{ route('admin.education.changeStatus') }}",
               //method: "POST"
               type:"POST",
               async:false,
                data:{
                   educationID: educationID
                },
                success: function (response)
                {

                    Swal.fire({
                        icon: 'success',
                        title: 'Başarılı',
                        text: response.educationID+" ID'li kayıt durumu "+ response.newStatus +" olarak güncellendi.",
                        confirmButtonText:'Tamam'
                    });

                    
                    if (response.status ==1)
                    {
                        self.removeClass("btn-danger");
                        self.addClass("btn-success");
                        self[0].innerText="Active";
                    }
                    else if (response.status ==0) 
                    {
                        self.removeClass("btn-success");
                        self.addClass("btn-danger");
                        self[0].innerText="Disable";
                    }

                },
                error: function ()
                {

                }
            });


        });
    </script>
@endsection