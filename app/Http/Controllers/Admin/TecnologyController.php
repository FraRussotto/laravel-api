<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tecnology;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::all();
        return view('admin.tecnologies.index', compact('tecnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|max:30',
        ], [
            'name.required' => 'Il nome della tecnologia è richiesto',
            'name.max' => 'Il nome della tecnologia deve avere massimo 30 caratteri',
        ]);

        $exists = Tecnology::where('name', $request->name)->first();
        if ($exists) {
            return redirect()->route('admin.tecnologies.index')->with('error', 'Tecnologia già presenta');
        } else {
            $form_data = $request->all();
            $new_tecnology = new Tecnology();
            $form_data['slug'] = Tecnology::generateSlug($form_data['name']);

            $new_tecnology->fill($form_data);
            $new_tecnology->save();
            return redirect()->route('admin.tecnologies.index')->with('success', 'Tecnologia inserita con successo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();
        return redirect()->route('admin.tecnologies.index')->with('success', 'Tecnologia eliminata con successo');
    }
}
