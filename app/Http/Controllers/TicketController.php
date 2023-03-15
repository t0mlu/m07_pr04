<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }


    public function create()
    {
        $aux = new Ticket();
        $fillable = $aux->getFillable();
        return view('tickets.create', compact('fillable'));
    }


    public function store(Request $request)
    {
        Ticket::create($request->all());
        $request->file('screenshot')->store('storage');
        return redirect()->route('tickets.index');
    }


    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }


    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }


    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        $country->update(array_filter($request->all()));
        return redirect()->route('countries.index');
    }


    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }
}
