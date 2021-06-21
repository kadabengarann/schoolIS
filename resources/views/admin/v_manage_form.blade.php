@extends('layout.v_template')


@section('content')
<div class="container-fluid">
    <h1 class="my-4"> @yield('mode')</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Manage</a></li>
        <li class="breadcrumb-item"><a href="/@yield('link')">@yield('mode')</a></li>
        <li class="breadcrumb-item active">Set</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>
            
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Set @yield('mode')</h3>
                    
                </div>
                <div class="card-body">  
                    @yield('contentForm') 
                </div>
                <div class="card-footer text-center">
                </div>
            </div>
        </div>
    </div> 
@endsection