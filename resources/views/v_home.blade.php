@extends('layout.v_template')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
	<h1 class="my-4">Welcome, Admin!</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<div class="row">
		<div class="col-xl-4 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<p class="card-title">Students</p>
					<h1 class="card-text"><i class="fas fa-users"></i>
						69
					</h1>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="/students">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card bg-info text-white mb-4">
				<div class="card-body">
					<p class="card-title">Teachers</p>
					<h1 class="card-text"><i class="fas fa-chalkboard-teacher"></i>
					69
					</h1>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="/teachers">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="col-xl-4 col-md-4">
			<div class="card">
				<div class="card-header">Chart</div>
				<div class="card-body">
					<h5 class="card-title">Student houses</h5>
					<div id="chartContainer" style="height: 370px; width: 100%;"></div>
				</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<div class="legend">
						<div class="mt-1">
							<i class="fa fa-circle" style="color:#4f81bc"></i> Gryffindor
							<i class="fa fa-circle ml-1" style="color:#bf504e"></i> Hufflepuff
						</div>
						<div class="mt-2">
							<i class="fa fa-circle" style="color:#9bbb58"></i> Ravenclaw
							<i class="fa fa-circle" style="color:#23bfaa"></i> Slytherin
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
