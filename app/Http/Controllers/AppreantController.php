<?php

namespace App\Http\Controllers;

use App\Models\appreant;
use Illuminate\Http\Request;

class AppreantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprenants=appreant::all();
    
        return view('index',compact("apprenants"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(appreant $appreant)
    {
        return view('detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appreant $appreant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, appreant $appreant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appreant $appreant)
    {
        //
    }
}
