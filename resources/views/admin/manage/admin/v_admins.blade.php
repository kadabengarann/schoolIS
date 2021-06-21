@extends('layout.v_template')

@section('title', 'Admins')


@section('content')
<div class="container-fluid">
    <h1 class="my-4">Admins</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Manage</a></li>
        <li class="breadcrumb-item active">Admins</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>
            
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Admin list
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if (!empty($result)) {
                            foreach ($result as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td>**********</td>
                                    <td>
                                        <a class="btn btn-danger" href="services/delete.php?level=admin&username=<?php echo $row['username']; ?>" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="admins/add"><i class="fas fa-plus-circle"></i> Tambah Admin</a>
</div>
@endsection
