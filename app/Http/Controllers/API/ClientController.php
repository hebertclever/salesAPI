<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client; // Certifique-se de que o modelo Client está no local correto
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json($client, 201);
    }

    public function show(string $id)
    {
        return Client::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return response()->json($client, 200);
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return response()->json(null, 204);
    }
}
