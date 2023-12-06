<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{

    public function prova()
    {
        $user = [
            'name' => '<NAME>',
            'email' => '<EMAIL>',
        ];

        return response()->json(compact($user));
    }

    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }
}
