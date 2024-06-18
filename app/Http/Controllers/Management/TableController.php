<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('management.table');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.createtable');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:tables|max:255']);
        $table = new Table();
        $table->name = $request->name;
        $table->save();
        $request->session()->flash('status','Table '. $request->name. ' is created successfully');
        return redirect('management/table');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
