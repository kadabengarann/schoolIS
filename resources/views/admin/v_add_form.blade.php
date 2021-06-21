@extends('layout.v_template')


@section('content')
<div class="container-fluid">

    <h1 class="my-4">Add @yield('mode')</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Admin</a></li>
        <li class="breadcrumb-item active">@yield('title')s</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ut id, numquam sint eum placeat a beatae iusto in quod nam nostrum dolores dolore saepe exercitationem adipisci dicta, quasi aspernatur?</a>
            
        </div>
    </div>
    @yield('contentForm')
</div>
@endsection