@extends('layout.v_template')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
	<h1 class="my-4">Welcome, {{ Auth::user()->name }}!</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                    <p class="card-title">Assignment Left</p>
                    <h1 class="card-text"><i class="fas fa-magic"></i>  4</h1>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="small text-white stretched-link">Astronomy</p>
                    <div class="small text-white"></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="small text-white stretched-link">History of Magic</p>
                    <div class="small text-white"></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="small text-white stretched-link">Transfiguration</p>
                    <div class="small text-white"></div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="small text-white stretched-link">Dark Arts</p>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
            <div class="card-body">
                    <p class="card-title">Upcoming Exam</p>
                    <h1 class="card-text"><i class="fas fa-vial"></i>  1</h1>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="small text-white stretched-link">Care of Magical Creatures</p>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
