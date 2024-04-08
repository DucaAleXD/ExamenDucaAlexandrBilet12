<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
         $events = Event::all();
        $query = Event::query();

        // Verifica dacă există o căutare după titlu
        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        // Verifica dacă există o căutare după locație
        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->input('location') . '%');
        }

        // Obține evenimentele filtrate
        $events = $query->get();
            return view('index',['events'=>$events]);
            
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create() :View
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
        'title' => 'required|unique:events|max:255',
        'description' => 'required',
        'date' => 'required',
        'location' => 'required',
        
    ]);
        Event::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
     public function show(Event $event)
    {
        //Preluare id-ul event
        return view('show',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book->title=$request->title;
        $book->description=$request->description;
        $book->date=$request->date;
        $book->location=$request->location;
        $book->save();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
       $event->delete();
        return redirect()->back();
    }
}
