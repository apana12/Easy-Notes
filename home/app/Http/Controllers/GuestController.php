<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('homes.index');
    }

    public function storeInteraction(Request $request)
{
    // Validate and store guest interaction
    $data = $request->validate([
        'action' => 'required|string',
    ]);

    Guest::create([
        'action' => $data['action'],
    ]);

    // Respond with a success message or any other response as needed
}
}
