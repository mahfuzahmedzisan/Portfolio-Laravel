@extends('backend.layouts.master')

@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="my-4 text-center">
         <h4 class="fs-2 fw-bold text-primary">Project Details</h4>
      </div>
   </div>
   <div class="col-md-12">
      <div class="card shadow-sm border-0">
         <div class="card-header bg-primary text-white">
            <div class="d-flex align-items-center justify-content-between">
               <h4 class="card-title mb-0">Project: {{ $project->name }}</h4>
               <a href="{{ route('projects.index') }}" class="btn btn-light btn-sm">
                  <i class="bi bi-arrow-left"></i> Back to Project List
               </a>
            </div>
         </div>
         <div class="card-body">
            <!-- Project Details -->
            <div class="row gy-4">
               <!-- Project Name and URL -->
               <div class="col-md-6">
                  <div class="bg-light p-3 rounded">
                     <h6 class="fw-bold text-secondary">Project Name</h6>
                     <p class="mb-0">{{ $project->name }}</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="bg-light p-3 rounded">
                     <h6 class="fw-bold text-secondary">Project URL</h6>
                     <p class="mb-0">
                        @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" class="text-decoration-underline">{{ $project->project_url }}</a>
                        @else
                        <em>No URL provided</em>
                        @endif
                     </p>
                  </div>
               </div>
               <!-- Description -->
               <div class="col-md-12">
                  <div class="bg-light p-3 rounded">
                     <h6 class="fw-bold text-secondary">Description</h6>
                     <p>{{ $project->description ?: 'No description provided.' }}</p>
                  </div>
               </div>
               <!-- Start and End Dates -->
               <div class="col-md-6">
                  <div class="bg-light p-3 rounded">
                     <h6 class="fw-bold text-secondary">Start Date</h6>
                     <p>{{ $project->start_date ? date('F d, Y', strtotime($project->start_date)) : 'Not set' }}</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="bg-light p-3 rounded">
                     <h6 class="fw-bold text-secondary">End Date</h6>
                     <p>{{ $project->end_date ? date('F d, Y', strtotime($project->end_date)) : 'Not set' }}</p>
                  </div>
               </div>
               <!-- Project Image -->
               <div class="col-md-12 text-center">
                  <h6 class="fw-bold text-secondary mb-3">Project Image</h6>
                  @if($project->img_url)
                  <img src="{{ $project->img_url }}" alt="Project Image" class="img-fluid rounded shadow-sm" style="max-width: 400px; height: auto;">
                  @else
                  <em>No image available</em>
                  @endif
               </div>
            </div>
         </div>
         <div class="card-footer text-center bg-light">
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">
               <i class="bi bi-arrow-left"></i> Back to List
            </a>
         </div>
      </div>
   </div>
</div>
@endsection