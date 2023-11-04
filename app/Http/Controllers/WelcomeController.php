<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index(Request $request)
    {
        return view('welcome', [
            'events' => Event::orderBy('event_date', 'ASC')->get(),
            'categories' => EventCategory::all()
        ]);

        // $events = Event::all();
        // return view('welcome', [
        //     'events' => Event::orderBy('event_date', 'ASC')->get(),
        //     'categories' => EventCategory::all()
        // ])->with('events', $events);

        $event_categories = EventCategory::all();
        return view('welcome',)->with('event_categories', $event_categories);
    }


    public function generatePdf(Request $request) 
    {
        $events = Event::orderBy('event_date', 'ASC')->get();
        $pdf = Pdf::loadView('pdf.download', compact('events'));
        
        return $pdf->stream('timeline-template'.time().'.pdf');
    }
}
