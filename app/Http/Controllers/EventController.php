<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index(): View
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return View
     */
    public function create(): View
    {
        $events = Event::all();
        return view('events.create')->with('events', $events);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $event = new Event($request->all());
        $event->save();
        return redirect(route('events.index'));
    }

    /**
     * Display the specified resource.
     * 
     * @param Event $event
     * @return View
     */
    public function show(Event $event)//: View
    {
        // $events = Event::all();
        // return view('events.show')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param Event $event
     * @return View
     */
    public function edit(Event $event): View
    {
        return view('events.edit', [
            'event' =>$event
        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param Request $request
     * @param Event $event
     * @return RedirectResponse
     */
    public function update(Request $request, Event $event): RedirectResponse
    {
        $event->fill($request->all());
        $event->save();
        return redirect(route('events.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event = Event::find($id);    
        $event->delete();
    }
}
