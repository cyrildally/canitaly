<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContattiRequest;
use App\Http\Handlers\UploadHandler;

class ContattiController extends Controller
{
    public function getContatti()
    {
        return view('contatti');
    }

    public function postContatti(ContattiRequest $request, UploadHandler $uploadHandler) {
        
        $chemin = 'uploads/';
        $nom = 'renamed';
        
        // registrare le info e recuperare l'id del record

        if($uploadHandler->save($request->file('upload'), $chemin, $nom)) {

            // aggiornare il db con il path della foto
            
            // invio della mail all'admin
            Mail::send('emails.contatti', $request->all(), function($message) {
                $message->to('cyril.dally.facchinetti@gmail.com')->subject('Nuovo annuncio dal sito Canitaly');
                });

            // redirect
            return view('contatti');
            }

        return redirect('contatti')->with('error','Error during upload');
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
