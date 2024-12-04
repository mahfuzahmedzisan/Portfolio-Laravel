@extends('backend.layouts.master')

@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="my-4 text-center">
         <h4 class="fs-2 fw-bold">Project Management</h4>
      </div>
   </div>
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
               <h4 class="card-title">Edit Project</h4>
               <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to Project List</a>
            </div>
         </div>
         <div class="card-body">

            <!-- Display Validation Errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif

            <!-- Project Edit Form -->
            <form action="{{ route('projects.update', encrypt($project->id)) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="row">
                  <div class="col-md-12">
                     <div class="mb-3">
                        <label class="form-label">Project Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $project->name) }}" required placeholder="Enter the project name">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter a brief description of the project">{{ old('description', $project->description) }}</textarea>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">Start Date <span class="text-danger">*</span></label>
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $project->start_date ? date('Y-m-d', strtotime($project->start_date)) : '') }}" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $project->end_date ? $project->end_date->format('Y-m-d') : '') }}">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">Project Image</label>
                        <input type="file" name="image" class="form-control" id="imageUpload">
                        <small class="form-text text-muted">Upload a relevant image for the project (optional).</small>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <label class="form-label">Project URL</label>
                        <input type="url" name="project_url" class="form-control" value="{{ old('project_url', $project->project_url) }}" placeholder="Enter the project URL">
                        <small class="form-text text-muted">Provide a link to the project if available (optional).</small>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Save Project</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@endsection
