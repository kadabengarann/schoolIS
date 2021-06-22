@extends('layout.v_template')

@section('title', 'Detail Student')


@section('content')
<div class="container-fluid">
    <h1 class="my-4">Detail Student</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item"><a href="/teachers">Students</a></li>
        <li class="breadcrumb-item active">Detail Student</li>
    </ol>
        <div class="card mb-4">
            <div class="card-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>

            </div>
        </div>
        <form name="frmAdd" method="POST" action="services/update.php" id="EditData">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">NIS</label><input name="id" type="text" class="form-control" value="{{ $student->id }}" readonly="readonly"></div>
                            <div class="col-md-12"><label class="labels">Nama</label><input name="nama" type="text" class="form-control" value="{{ $student->name }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Tempat Lahir</label><input name="tmptlhr" type="text" class="form-control" value="{{ $student->tmp_lahir }}"></div>
                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input name="tgllhr" type="date" class="form-control" value="{{ $student->tgl_lahir }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Alamat</label><textarea name="alamat" class="form-control" rows="3">{{ $student->alamat }}</textarea></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Akademik</span></div><br>
                        <div class="col-md-12"><label class="labels">House</label>
                            <input name="houses" type="text" class="form-control" value="{{ $student->house }}">
                        </div> <br>
                        <div class="col-md-6"><label class="labels">Angkatan</label><input name="angktn" type="text" class="form-control" value="{{ $student->year }}"></div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit" form="EditData" type="submit" value="save_record"><i class="far fa-edit"></i> Ubah</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
</div>
@endsection
