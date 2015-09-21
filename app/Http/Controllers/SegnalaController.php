<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use URL;
use App\Http\Requests\SegnalaRequest;
use App\Http\Handlers\UploadHandler;

class SegnalaController extends Controller
{
    public function getSegnala()
    {
        return view('segnala');
    }

    public function postSegnala(SegnalaRequest $request, UploadHandler $uploadHandler) {
        
        $path = 'uploads/';
        $filename = 'renamed';
        $extension = $request->file('upload')->getClientOriginalExtension();
        
        if($filename = $uploadHandler->save($request->file('upload'), $path, $filename, $extension)) {

            // inserire i dati nel db e recuperare l'id_del_record

            Mail::send('emails.segnala', ['titolo' => $request->input('titolo'), 'descrizione' => $request->input('descrizione'), 'citta' => $request->input('citta'), 'filename' => URL::to('uploads/').'/'.$filename], function($message) {
                $message->to('cyril.dally.facchinetti@gmail.com')->subject('Nuova segnalazione');
                });

            // aggiornare il db con il path della foto where id = id_del_record

            return view('segnala');
            }

        return redirect('segnala')->with('error','Error during upload');
        }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
