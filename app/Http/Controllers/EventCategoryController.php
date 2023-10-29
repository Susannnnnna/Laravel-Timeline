<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\UpsertEventCategoryRequest;
use Illuminate\Support\Facades\Gate;


class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index(): View
    {
        $event_categories = EventCategory::all();
        return view('event_categories.index')->with('event_categories', $event_categories);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return View
     */
    public function create(): View
    {
        $event_categories = EventCategory::all();
        return view('event_categories.create')->with('event_categories', $event_categories);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(UpsertEventCategoryRequest $request): RedirectResponse
    {
        $event_category = new EventCategory($request->validated());
        $event_category->save();
        return redirect(route('event_categories.index'));
    }

    /**
     * Display the specified resource.
     * 
     * @param EventCategory $event_category
     * @return View
     */
    public function show(EventCategory $event_category)//: View
    {
        // $event_category = EventCategory::all();
        // return view('event_categories.show')->with('event_categories', $event_categories);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param EventCategory $event_category
     * @return View
     */
    public function edit(EventCategory $event_category): View
    {
        return view('event_categories.edit', [
            'event_category' =>$event_category
        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param Request $request
     * @param EventCategory $event_category
     * @return RedirectResponse
     */
    public function update(UpsertEventCategoryRequest $request, EventCategory $event_category): RedirectResponse
    {
        $event_category->fill($request->validated());
        $event_category->save();
        return redirect(route('event_categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventCategory $event_category)
    {
        $event = EventCategory::find($id);    
        $event->delete();
    }
}
