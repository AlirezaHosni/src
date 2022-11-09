<?php

namespace App\Http\Controllers\Web\Back;

use App\Http\Controllers\Controller;
use App\Inventory;
use App\Req;

class
TicketController extends Controller
{
    public function index()
    {
        $inventories = Inventory::latest()->get();
        $req = Req::latest()->get();

        return view('admin.ticket.index', compact('inventories', 'req'));
    }
}
