<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(1);
        return response()->json($projects);
    }

    public function getSlug($slug)
    {
        $project = Project::where('slug', $slug)->with('type', 'tecnologies')->first();

        return response()->json($project);
    }
}
