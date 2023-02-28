@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a class="btn btn-info mb-5" href="{{route('admin.projects.create')}}">Create a new project</a>
    <div class="row gx-4 gy-3">
        @foreach ($projects as $project)
            
        <div class="col-4">
            <div class="card">
                <h4>{{$project->title}}</h4>
                <img src="{{asset('storage/'. $project->image)}}" alt="placeholder">
                <pre>{{$project->github_reference}}</pre>
                <div>

                    <a class="btn btn-info" href="{{route('admin.projects.show', $project->id)}}">Show</a>
                    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" class="d-inline-block form-deleter" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </div>


                   


                
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection