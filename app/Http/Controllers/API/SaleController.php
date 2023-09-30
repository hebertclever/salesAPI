<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sale; // Certifique-se de que o modelo Sale está no local correto
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return Sale::all();
    }

    public function store(Request $request)
    {
        $sale = Sale::create($request->all());
        return response()->json($sale, 201);
    }

    public function show(string $id)
    {
        return Sale::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $sale = Sale::findOrFail($id);
        $sale->update($request->all());
        return response()->json($sale, 200);
    }

    public function destroy(string $id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();
        return response()->json(null, 204);
    }
}
