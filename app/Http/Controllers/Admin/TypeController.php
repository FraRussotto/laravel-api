<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Functions\Helper;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    public function TypesProjects()
    {
        $types = Type::all();
        return view('admin.types.typesProjects', compact('types'));
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
            'name.required' => 'Il nome della tipologia è richiesto',
            'name.max' => 'Il nome della tipologia deve avere massimo 30 caratteri',
        ]);

        $exists = Type::where('name', $request->name)->first();
        if ($exists) {
            return redirect()->route('admin.types.index')->with('error', 'Tipologia già presenta');
        } else {
            $form_data = $request->all();
            $new_Type = new Type();
            $form_data['slug'] = Type::generateSlug($form_data['name']);

            $new_Type->fill($form_data);
            $new_Type->save();
            return redirect()->route('admin.types.index')->with('success', 'Tipologia inserita con successo');
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
    public function update(Request $request, Type $type)
    {
        $val_data = $request->validate([
            'name' => 'required|max:30',
        ], [
            'name.required' => 'Il nome della tipologia è richiesto',
            'name.max' => 'Il nome della tipologia deve avere massimo 30 caratteri',
        ]);

        $exists = Type::where('name', $request->name)->first();
        if ($exists) {
            return redirect()->route('admin.types.index')->with('error', 'Tipologia già presente');
        }
        $val_data['slug'] = Helper::generateSlug($request->name, Type::class);
        $type->update($val_data);
        return redirect()->route('admin.types.index')->with('success', 'Tipologia aggiornata con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index')->with('success', 'Tipologia eliminata con successo');
    }
}
