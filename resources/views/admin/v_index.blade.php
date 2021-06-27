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
						{{ $student }}
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
					{{ $teacher }}
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

		<div class="col-lg-6">
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-pie mr-1"></i>
					Chart
				</div>
				<div class="card-body">
					<h5 class="card-title">Student houses</h5>
					<canvas id="myPieChart" width="100%" height="50"></canvas>
				</div>
				<div class="card-footer small text-muted">Updated today</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script> 
	let gryffindor = {{ $gryffindor }};
	let hufflepuff = {{ $hufflepuff }};
	let ravenclaw = {{ $ravenclaw }};
	let slytherin = {{ $slytherin }};
</script>

<script src="{{ asset('template/js/') }}/chart-pie-demo.js"></script>

@endsection
