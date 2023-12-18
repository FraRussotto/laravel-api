<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContact;


class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:2|max:255',
                'email' => 'required|min:2|max:255',
                'message' => 'required|min:2'
            ],
            [
                'name.required' => 'Il nome è obbligatorio',
                'name.min' => 'Il nome deve essere di almeno 2 caratteri',
                'name.max' => 'Il nome deve essere di massimo 255 caratteri',
                'email.required' => 'La mail è obbligatoria',
                'email.min' => 'La mail deve essere di almeno 2 caratteri',
                'email.max' => 'La mail deve essere di massimo 255 caratteri',
                'message.required' => 'Il message è obbligatorio',
                'message.min' => 'Il message deve essere di almeno 2 caratteri',
            ]
        );

        if ($validator->fails()) {
            $success = false;
            $errors = $validator->errors();
            return response()->json(compact('success', 'errors'));
        }

        //creazione nuovo lead con quello che arriva dal front
        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        //impacchettare l'email
        Mail::to('hello@example.com')->send(new NewContact($new_lead));

        $success = true;
        return response()->json(compact('success'));
    }
}
