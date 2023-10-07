<?php

namespace App\Http\Controllers;

use App\Models\product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('nueva.index');
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
    public function show(product2 $product2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product2 $product2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product2 $product2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product2 $product2)
    {
        //
    }
}
