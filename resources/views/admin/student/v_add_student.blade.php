@extends('admin.v_add_form')

@section('title', 'Add Student')
@section('mode', 'Student')


@section('contentForm')
<form name="frmAdd" method="POST" action="services/add.php" id="AddData">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="p-3 pt-5 pb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">ID</label><input type="text" class="form-control" placeholder="ID Number" value="" name="id" required maxlength="10"></div>
                    <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama" value="" name="nama" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" value="" placeholder="" name="tmptlhr" required></div>
                    <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control" value="" name="tgllhr" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Alamat</label><textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" required></textarea></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Akademik</span></div><br>
                <div class="col-md-12"><label class="labels">House</label>
                    <select required class="form-control" id="houses" name="houses">
                    <option value="" selected disabled hidden>Choose here</option>
                        <option>Gryffindor</option>
                        <option>Hufflepuff</option>
                        <option>Ravenclaw</option>
                        <option>Slytherin</option>
                    </select>
                </div> <br>
                <div class="col-md-6"><label class="labels">Angkatan</label><input type="text" class="form-control" value="" placeholder="" name="angktn" required></div>
                <div class="mt-5 text-center">
                    <button class="btn btn-success profile-button" name="add_record" type="submit" form="AddData" type="submit" value="add_record"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>

            </div>

        </div>
    </div>

</form>
@endsection