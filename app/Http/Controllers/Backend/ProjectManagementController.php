<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Projects\Projects;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data['projects'] = Projects::latest()->paginate(10); 
        return view('backend.project_management.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project_management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload if there's an image
        $data = $request->only('name', 'description', 'start_date', 'end_date', 'project_url');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $data['img_url'] = $imagePath;
        }

        // Create the project
        Projects::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $id = decrypt($id);
        $data['project'] = Projects::findOrFail($id);
        return view('backend.project_management.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        // Decrypt the project ID
        $id = decrypt($id);

        // Find the project by ID
        $data['project'] = Projects::findOrFail($id);

        // Return the view with the project data
        return view('backend.project_management.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = decrypt($id);
        $project = Projects::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_url' => 'nullable|url',
        ]);

        // Update the project attributes
        $project->name = $request->name;
        $project->description = $request->description;
        $project->start_date = $request->start_date ? \Carbon\Carbon::parse($request->start_date) : null;
        $project->end_date = $request->end_date ? \Carbon\Carbon::parse($request->end_date) : null;

        // If an image is uploaded, store it and update the project image URL
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public');
            $project->img_url = $imagePath;
        }

        // Update project URL
        $project->project_url = $request->project_url;

        // Save the project
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $encryptedId)
    {
        $id = decrypt($encryptedId);
        $project = Projects::findOrFail($id);

        $project->delete();

        // Redirect with a success message
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
