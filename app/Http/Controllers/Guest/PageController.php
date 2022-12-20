<?php

namespace App\Http\Controllers\Guest;

use App\Models\Ticket;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tickets()
    {
        $tickets = Ticket::all();
        // dd($tickets);
        return view('tickets', compact('tickets'));
    }
}
