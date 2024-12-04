@extends('frontend.layouts.master')

@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card shadow-sm border-0 rounded">
         <div class="card-header bg-primary text-white">
            <h1 class="card-title text-center">Project Details</h1>
         </div>
         <div class="card-body text-center">
            <h1 class="display-4">Show Page</h1>
         </div>
      </div>
   </div>
</div>

<div class="row py-5 justify-content-center">
   <div class="col-md-6">
      <div class="card shadow-lg border-0 rounded">
         <!-- Scrollable Image Container -->
         <div class="overflow-auto" style="max-height: 300px;">
            <img class="img-fluid w-100" src="{{ asset($project->img_url) }}" alt="{{ $project->name }}">
         </div>
         <div class="card-body">
            <h5 class="card-title text-primary">{{ $project->name }}</h5>
            <p class="card-text text-muted">{{ $project->description }}</p>
            <a href="{{ $project->project_url }}" class="btn btn-primary" target="_blank">View Live Project</a>
         </div>
      </div>
   </div>
</div>
@endsection