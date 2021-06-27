@extends('layout.v_template')

@section('title', 'Biodata')

@section('content')

<div class="container-fluid">
<h1 class="my-4">Biodata</h1>
	<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">User</a></li>
		<li class="breadcrumb-item active">Biodata</li>
	</ol>
@if (session('pesan'))
<div class="alert alert-success" role="alert">
    {{ session('pesan') }}
</div>
@endif
<div>
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="{{ asset('img/avatar.png') }}" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4>{{ Auth::user()->name }}</h4>
                <p class="text-secondary mb-1">ID : 214144112</p>
                <p class="text-muted font-size-sm"><i class="fas fa-university"></i>  --  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <ul class="nav nav-pills" id="mytab">
          <li class="nav-item">
            <a href="#biodata" data-toggle="tab" class="nav-link m-l active" aria-expanded="true">Biodata Pribadi</a>
          </li>
  
          <li class="nav-item">
            <a href="#akun" data-toggle="tab" class="nav-link m-l" aria-expanded="true">Akun</a>
          </li>
  
        </ul>
        <div class="tab-content">
          <div class="panel tab-pane wrapper-lg  active" id="biodata">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->name }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Angkatan</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    2090
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Tempat Tanggal Lahir</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    29/2/2001 , Mexico
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Alamat</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    7th district, Mars
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="mt-5 text-left">
                        <a class="btn btn-success" href='#'><i class="far fa-edit"></i> Edit</a>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i> Status</h6>
                      <small>Ancient Runes</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Care of Magical Creatures</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Muggle Studies</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>History of Magic</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Transfiguration</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="panel tab-pane wrapper-lg" id="akun">
            <div class="card mb-5">
  
              <div class="card-body">
                <form name="frmUserUpdt" method="POST" action="" id="userUpdt">
                  <div class="col-xs-5">
                    <div class="row mt-2">
                      <div class="col-md-7"><label class="labels">Username</label><input name="usrnm" type="text" class="form-control" value="" readonly="readonly"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-7"><label class="labels">Password Lama</label><input name="oldpass" type="password" class="form-control" required></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-7"><label class="labels">Password Baru</label><input name="newpass" type="password" class="form-control" required></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-7"><label class="labels">Re-type Password Baru</label><input name="newpass2" type="password" class="form-control" required></div>
                    </div>
                  </div>
                  <div class="mt-5 text-left">
                    <button class="btn btn-success profile-button" name="save_password" type="submit" form="userUpdt" type="submit" value="save_password"><i class="fas fa-user-cog"></i> Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
