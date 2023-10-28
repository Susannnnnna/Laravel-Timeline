<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index()
    {
        $events = Event::all();
        return view('welcome', [
            'categories' => EventCategory::all()
        ])->with('events', $events);
    }
}
