@extends('admin.v_add_form')

@section('title', 'Add Student')
@section('mode', 'Student')


@section('contentForm')
<form method="POST" enctype="multipart/form-data" action="/teachers/insert">
    @csrf
    <div class="row">
        
        <div class="col-md-5 border-right form-group">
            <div class="p-3 pt-5 pb-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">ID</label><input type="text" class="form-control @error('id') is-invalid @enderror" placeholder="ID Number" value="{{ old('id') }}" name="id"  maxlength="10" >
                        <div class="invalid-feedback">
                            @error('id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Nama</label><input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ old('name') }}" name="name">
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control @error('birthplace') is-invalid @enderror" value="{{ old('birthplace') }}" placeholder="" name="birthplace">
                        <div class="invalid-feedback">
                            @error('birthplace')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" name="date">
                        <div class="invalid-feedback">
                            @error('date')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Address</label><textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Alamat" name="address">{{ old('address') }}</textarea>
                        <div class="invalid-feedback">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
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
                    <button class="btn btn-success profile-button" name="add_record" type="submit" type="submit" value="add_record"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>

            </div>

        </div>
    </div>
</form>
@endsection