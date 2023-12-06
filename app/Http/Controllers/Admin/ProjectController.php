<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tecnology;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tecnologies = Tecnology::all();
        return view('admin.projects.create', compact('tecnologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'date' => 'required|max:12',
            'description' => 'min:10|max:500',
            'link' => 'required|min:3|max:100'
        ], [
            'name.required' => 'Il nome del progetto è richiesto',
            'name.min' => 'Il nome del progetto deve avere almeno 3 caratteri',
            'name.max' => 'Il nome del progetto deve avere massimo 50 caratteri',
            'date.required' => 'La data è richiesta',
            'date.max' => 'La data deve avere massimo 12 caratteri',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri',
            'link.required' => 'Link richiesto',
        ]);

        $form_data = $request->all();
        $new_project = new Project();

        $form_data['slug'] = Project::generateSlug($form_data['name']);

        //Salvataggio dell'immagine
        if (array_key_exists('image', $form_data)) {
            $form_data['image_original_name'] = $request->file('image')->getClientOriginalName();
            $form_data['image'] = Storage::put('uploads', $form_data['image']);
        }

        $new_project->fill($form_data);
        $new_project->save();

        if (array_key_exists('tecnologies', $form_data)) {
            $new_project->tecnologies()->attach($form_data['tecnologies']);
        }

        return redirect()->route('admin.projects.show', $new_project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();
        if ($project['name'] == $form_data['name']) {
            $form_data['slug'] = $project['slug'];
        } else {
            $form_data['slug'] = Project::generateSlug($form_data['name']);
        }

        $project->update($form_data);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
