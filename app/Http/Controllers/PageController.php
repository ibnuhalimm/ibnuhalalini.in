<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $invitation = $request->invitation;

        $guest = Guest::where('code', $invitation)->firstOrFail();

        return view('index', compact('guest'));
    }
}
