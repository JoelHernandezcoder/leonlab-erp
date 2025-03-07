<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sale;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('sales')->get();
        return view('clients.index', [
            'client' => $clients,
            'sales' => Sale::all(),
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'country' => ['required'],
        ]);

        $client = Client::create($attributes);

        return redirect('/clients');
    }
}
