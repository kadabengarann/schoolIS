@extends('layout.v_template')

@section('title', 'Detail Teacher')


@section('content')
<div class="container-fluid">
    <h1 class="my-4">Teacher Data</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item"><a href="/teachers">Teachers</a></li>
        <li class="breadcrumb-item active">Detail Teacher</li>
    </ol>
        <div class="card mb-4">
            <div class="card-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>

            </div>
        </div>
            <form name="frmAdd" method="POST" action="services/update.php" id="EditData1">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Teacher ID</label><input name="id" type="text" class="form-control" value="{{ $teacher->id }}" readonly="readonly"></div>
                                <div class="col-md-12"><label class="labels">Nama</label><input name="nama" type="text" class="form-control" value="{{ $teacher->name }}" readonly="readonly"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Subject</label><input name="subject" type="text" class="form-control" value="{{ $teacher->subject }}" readonly="readonly"></div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-success profile-button" name="save_record_teacher" type="submit" form="EditData1" type="submit" value="save_record_teacher"><i class="far fa-edit"></i> Ubah</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
</div>
@endsection
