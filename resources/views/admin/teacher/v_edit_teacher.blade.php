@extends('layout.v_template')

@section('title', 'Edit Teacher')


@section('content')
<div class="container-fluid">

    <h1 class="my-4">Edit @yield('mode')</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item active">@yield('title')s</li>
    </ol>
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="/teacher/update/{{ $teacher->id }}">
        @csrf
        <div class="row">
            <div class="col-md-5 border-right form-group">
                <div class="p-3 pb-2">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">ID</label><input type="text" class="form-control @error('id') is-invalid @enderror" placeholder="ID Number" value="{{ $teacher->id }}" name="id"  maxlength="10" readonly>
                            <div class="invalid-feedback">
                                @error('id')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Nama</label><input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ $teacher->name }}" name="name">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control @error('birthplace') is-invalid @enderror" value="{{ $teacher->tmp_lahir }}" placeholder="" name="birthplace">
                            <div class="invalid-feedback">
                                @error('birthplace')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="date" class="form-control @error('date') is-invalid @enderror" value="{{ $teacher->tgl_lahir }}" name="date">
                            <div class="invalid-feedback">
                                @error('date')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address</label><textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Alamat" name="address">{{ $teacher->address }}</textarea>
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
                    <div class="col-md-12"><label class="labels">Subject</label> <input type="text" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Subject" name="subject" value="{{ $teacher->subject }}">
                        <div class="invalid-feedback">
                            @error('subject')
                                {{ $message }}
                            @enderror
                        </div>
                    </div> <br>
                    <div class="mt-5 text-center">
                        <button class="btn btn-success profile-button" name="save_record" type="submit" value="save_record"><i class="far fa-edit"></i> Ubah</button>
                    </div>
    
                </div>
    
            </div>
        </div>
    </form>    
</div>

@endsection
