@extends('admin.v_manage_form')

@section('title', 'Set User')
@section('mode', 'Users')
@section('link', 'users')


@section('contentForm')
<form action="services/update.php" method="post" id="userUpdt2">
    <div class="form-group">
        <label class="small mb-1" for="inputEmailAddress">Username</label>
        <input class="form-control py-4" name="usrnm" type="text" value="username" readonly="readonly">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="inputPassword">New Password</label>
        <input class="form-control py-4" name="newpass" type="password" />
    </div>
    <div class="form-group">
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
        <button class="btn btn-primary" type="submit" form="userUpdt2" name="userUpdt2" value="userUpdt2"><i class="fas fa-user-cog"></i> Save</button>
    </div>
</form>
@endsection