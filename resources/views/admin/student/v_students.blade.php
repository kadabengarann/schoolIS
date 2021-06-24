@extends('layout.v_template')

@section('title', 'Students')


@section('content')
<div class="container-fluid">
    <h1 class="my-4">Students</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item active">Students</li>
    </ol>
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>

        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Students List
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Houses</th>
                            <th>Year</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Houses</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($student as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->house }}</td>
                                <td>{{ $data->year }}</td>
                                <td>
                                    <a class="btn btn-info" href='/students/detail/{{ $data->id }}'><i class="far fa-edit"></i> Detail</a>
                                    <a class="btn btn-secondary" href='/students/edit/{{ $data->id }}'><i class="far fa-edit"></i> Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </td>
    
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
            <a class="btn btn-primary" href="?page=form_tambah&obj=Student"><i class="fas fa-user-plus"></i> Tambah Data</a>
        </div>
    </div>
</div>
@foreach ($student as $data)
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmModalLabel">Delete confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure want to delete {{ $data->name }} ??
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a href="student/delete/{{ $data->id }}" class="btn btn-danger">Yes</a>
        </div>
      </div>
    </div>
</div>
@endforeach


@endsection
