@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>
        Fill the following form to add a new project:
    </h3>
    @include('admin.projects.form', ['method'=>'PUT','routeAddress'=>'admin.projects.update'])

</div>
@endsection