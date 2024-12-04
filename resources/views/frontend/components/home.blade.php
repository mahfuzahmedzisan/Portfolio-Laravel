@extends('frontend.layouts.master')

@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card shadow-sm border-0 rounded">
         <div class="card-header bg-primary text-white">
            <div class="card-title">Welcome</div>
         </div>
         <div class="card-body">
            <h1 class="display-4 text-center">Home Page</h1>
         </div>
      </div>
   </div>
</div>

<div class="row py-5 gy-4" id="project-list">
   @foreach ($projects as $key => $project)
   <div class="col-md-4 project-item {{ $key >= 6 ? 'd-none' : '' }}">
      <div class="card shadow-lg border-0 rounded position-relative overflow-hidden">
         <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset($project->img_url) }}" alt="{{ $project->name }}">
         <div class="card-body p-4 bg-white">
            <h5 class="card-title text-primary">{{ $project->name }}</h5>
            <p class="card-text text-muted">{{ Str::limit($project->description, 150) }}</p>
         </div>
         <div class="position-absolute bottom-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white p-3" style="transition: transform 0.3s ease, opacity 0.3s ease;">
            <div class="btn-group">
               <a href="{{ route('frontend.show', encrypt($project->id)) }}" class="btn btn-light text-primary border-2 border-primary">View Details</a>
               <a href="{{ $project->project_url }}" class="btn btn-light text-primary border-2 border-primary" target="_blank">Live Project</a>
            </div>
         </div>
      </div>
   </div>
   @endforeach
</div>

<div class="text-center mt-4">
   <button id="toggle-projects-btn" class="btn btn-primary">View More</button>
</div>
@endsection

<style>
   .card .position-absolute {
      transform: translateY(100%);
      backdrop-filter: blur(5px);
      opacity: 0;
   }

   /* Hover effect: element slides up and fades in */
   .card:hover .position-absolute {
      transform: translateY(0);
      opacity: 1;
   }
</style>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      const btn = document.getElementById('toggle-projects-btn');
      const projects = document.querySelectorAll('.project-item');
      let isExpanded = false;

      btn.addEventListener('click', () => {
         isExpanded = !isExpanded;

         projects.forEach((project, index) => {
            if (index >= 6) {
               project.classList.toggle('d-none', !isExpanded);
            }
         });

         btn.textContent = isExpanded ? 'View Less' : 'View More';
      });
   });
</script>