@extends('admin.v_manage_form')

@section('title', 'Add Admin')
@section('mode', 'Admins')
@section('link', 'admins')


@section('contentForm')
<form action="services/add.php" method="post" id="AddAdm">
    <div class="form-group">
        <label class="small mb-1" for="inputEmailAddress">Username</label>
        <input class="form-control py-4" name="usrnm" type="text" placeholder="Enter Username" required maxlength="10"/>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="inputPassword">Password</label>
        <input class="form-control py-4" name="AdmPass" type="password" placeholder="Enter password" required />
    </div>
    <div class="form-group">
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
        <button class="btn btn-primary" type="submit" form="AddAdm" name="add_admin" value="add_admin"><i class="fas fa-user-plus"></i> Add</button>
    </div>
</form>
@endsection