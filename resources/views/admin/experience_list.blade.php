@extends('layouts.admin')

@section('title')
    Experience Informations
@endsection

@section('css')
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Experience List </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Experience List</li>
            </ol>
            <div class="col-md-12 mt-1">
                <a class="nav-link btn btn-success create-new-button"  href="{{ route('admin.experience.add') }}">+ Add New Experience</a>
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
                                <th>Company</th>
                                <th>Date</th>
                                <th>Task</th>
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
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->company }}</td>
                                    <td>{{ $item->task_name }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td><a data-id="{{ $item->id }}" class="btn {{ $buttonClass }} changeStatus" href="javascript:void(0)">{{ $status }}</a></td>
                                    <td>
                                        <a data-id="{{ $item->id }}" href="{{ route('admin.experience.add', ['experienceID' => $item->id]) }}" class="btn btn-warning text-center editEducation">
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
    <script>

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr("content")
            }
        });
        //Status Change
        $('.changeStatus').click(function () {
          //let educationID = $(this).data('id');
            let experienceID = $(this).attr('data-id');
            let self = $(this);

            $.ajax({
               url: "{{ route('admin.experience.changeStatus') }}",
               //method: "POST"
               type:"POST",
               async:false,
                data:{
                    experienceID: experienceID
                },
                success: function (response)
                {

                    Swal.fire({
                        icon: 'success',
                        title: 'Başarılı',
                        text: response.experienceID+" ID'li kayıt durumu "+ response.newStatus +" olarak güncellendi.",
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
        //Delete & Edit
        $('.deleteEducation').click(function () {

            let experienceID = $(this).attr('data-id');

            Swal.fire({
                title: "Emin Misiniz?",
                text: experienceID + " ID'li Eğitim bilgisini silmek istiyor musunuz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet',
                cancelButtonText: 'Hayır'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.experience.delete') }}",
                        type: "POST",
                        async: false,
                        data: {
                            experienceID : experienceID
                        },
                        success: function (response)
                        {
                            Swal.fire({
                                icon: 'success',
                                title: 'Başarılı',
                                text: 'Silme İşlemi Başarılı',
                                confirmButtonText:'Tamam'
                            });
                            $("tr#" + experienceID).remove();
                        },
                        eroor: function ()
                        {

                        }


                    })

                }
            })


        });
    </script>
@endsection