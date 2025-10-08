<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('application.create');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|max:255',
           'email'=>'required|string',
           'phone'=>'required|string',
           'gender'=> 'required|string',
           'dob'=>'required|string',
           'shortbio' => 'required|string|max:255',
           'file'=> 'required'
        ]);
        // dd($request->all());
        
        Application::create([
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
            'dob'=> $request->dob,
            'shortbio'=>$request->shortbio,
            'file'=>$request->file
        ]);
        return redirect('/application')->with('status','Submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        $application = Application::get();
        return $application;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
