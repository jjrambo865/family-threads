<?php

namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConnectionController extends Controller
{
    public function show()
    {
        $connectionCount = User::count();
        
        return Inertia::render('Welcome', ['connectionCount' => $connectionCount]);
    }
}
