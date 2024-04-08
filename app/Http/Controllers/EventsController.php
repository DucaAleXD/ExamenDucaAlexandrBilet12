<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $events = Event::all();
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
        'location' => 'required|numeric',
    ]);
        Event::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    return view('show',['event'=>$book]);

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
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $event->delete();
        return redirect()->back();
    }
}
