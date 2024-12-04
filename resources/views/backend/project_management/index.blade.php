@extends('backend.layouts.master')

@section('content')
<div class="row">
   <div class="col-md-12">
      <!-- Flash Message -->
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ session('error') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <div class="my-4 text-center">
         <h4 class="fs-2 fw-bold">Project Management</h4>
      </div>
   </div>
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
               <h4 class="card-title">Project List</h4>
               <a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>
            </div>
         </div>
         <div class="card-body">
            @if($projects->isEmpty())
            <div class="alert alert-warning text-center">
               No projects found.
            </div>
            @else
            <div class="table-responsive">
               <table id="add-row" class="display table table-striped table-hover">
                  <thead>
                     <tr>
                        <th>Project Name</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <!-- <th>End Date</th> -->
                        <th>Image</th>
                        <th>Project URL</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($projects as $project)
                     <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{date('d M, Y', strtotime($project->start_date))}}</td>
                        <td>
                           @if($project->img_url)
                           <img src="{{ $project->img_url }}" alt="Project Image" width="100">
                           @else
                           <span>No Image</span>
                           @endif
                        </td>
                        <td>
                           <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url ? $project->project_url : 'N/A' }}</a>
                        </td>
                        <td>
                           <div class="dropdown">
                              <a class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="icon-options-vertical"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li><a class="dropdown-item" href="{{ route('projects.edit', encrypt($project->id)) }}">{{ __("Edit") }}</a></li>
                                 <li>
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault(); 
                                       document.getElementById('delete-form-{{ $project->id }}').submit();">
                                       {{ __('Delete') }}
                                    </a>
                                    <form id="delete-form-{{ $project->id }}"
                                       action="{{ route('projects.destroy', encrypt($project->id)) }}"
                                       method="POST" style="display: none;">
                                       @csrf
                                       @method('DELETE')
                                    </form>
                                 </li>

                                 <li><a class="dropdown-item" href="{{ route('projects.show', encrypt($project->id)) }}">{{ __("View Details") }}</a></li>
                              </ul>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            @endif

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
               {{ $projects->links('vendor.pagination.custom') }}
            </div>



         </div>
      </div>
   </div>
</div>
@endsection