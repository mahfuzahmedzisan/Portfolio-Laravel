<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects\Projects;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $data['projects'] = Projects::all();
        return view("frontend.components.home", $data);
    }
    public function about()
    {
        return view("frontend.components.about");
    }
    public function projects()
    {
        return view("frontend.components.projects");
    }
    public function contact()
    {
        return view("frontend.components.contact");
    }

    public function show(string $id)
    {
        $id = decrypt($id);
        $data["project"] = Projects::findOrFail($id);
        return view("frontend.components.show", $data);
    }
}
