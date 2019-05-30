<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actors = Actor::all();
        return view('actor.index',compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actor = new Actor;

        $request->validate([
            'fname' => 'required',
            'lname' => 'required'
        ]);

        $actor->first_name = $request->get('fname');
        $actor->last_name = $request->get('lname');
        $actor->last_update = Carbon::now();

        $actor->save();
        $request->session()->flash('status', 'Actor created!');
        return redirect('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
        return view('actor.show',compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
        return view('actor.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        //
        $request->validate([
            'fname' => 'required',
            'lname' => 'required'
        ]);
        $actor->first_name = $request->get('fname');
        $actor->last_name = $request->get('lname');
        $actor->last_update = Carbon::now();

        $actor->save();
        $request->session()->flash('update', 'Actor updated!');
        return redirect('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
        $actor->delete();
        session()->flash('delete', 'Actor deleted!');
        return back();
    }
}
