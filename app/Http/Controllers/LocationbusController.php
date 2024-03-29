<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;

class LocationbusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loc = Bus::all();
        return view('/locations',compact('loc'));
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
    public function show(string $id)
    {
        $detail = Bus::findOrFail($id);
        //return view('/cultivateur/detaille',compact('detaille'));
        return view('/detail-locations',compact('detail'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
