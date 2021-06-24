@extends('layout.v_template')

@section('title', 'Teachers')


@section('content')
<div class="container-fluid">
    <h1 class="my-4">Teachers</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item active">Teachers</li>
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
            Teacher List
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Teacher ID</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Teacher ID</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($teacher as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->subject }}</td>
                                <td>
                                    <a class="btn btn-info" href='/teachers/detail/{{ $data->id }}'><i class="far fa-edit"></i> Detail</a>
                                    <a class="btn btn-secondary" href='/teachers/edit/{{ $data->id }}'><i class="far fa-edit"></i> Edit</a>
                                    <a class="btn btn-danger" href="#" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash-alt"></i> Hapus</a>
                                </td>
    
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
        <a class="btn btn-primary" href="/teachers/add"><i class="fas fa-user-plus"></i> Tambah Data</a>
                                        </div>


    </div>
</div>
@endsection
