<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory.index');
    }

    public function show($id)
    {
        return view('inventory.show', ['id' => $id]);
    }

    public function store(Request $request)
    {
        // Logic for storing inventory item
    }

    public function update(Request $request, $id)
    {
        // Logic for updating inventory item
    }

    public function destroy($id)
    {
        // Logic for deleting inventory item
    }
}
