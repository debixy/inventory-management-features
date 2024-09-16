<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryApiController extends Controller
{
    public function index()
    {
        // Logic to return list of inventory items
    }

    public function show($id)
    {
        // Logic to return a single inventory item
    }

    public function store(Request $request)
    {
        // Logic to store a new inventory item
    }

    public function update(Request $request, $id)
    {
        // Logic to update an inventory item
    }

    public function destroy($id)
    {
        // Logic to delete an inventory item
    }
}
