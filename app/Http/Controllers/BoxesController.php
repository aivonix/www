<?php

namespace App\Http\Controllers;

use App\Boxes;
use Illuminate\Http\Request;

class BoxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $options = ['red','blue','green','cyan','magenta','yellow','black'];
    public function index()
    {
        return response()->json(Boxes::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boxes.edit', [
            'options' => $this->options,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Boxes::create($request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'colour' => 'nullable|string',
        ]));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('boxes.edit', [
            'box' => current(Boxes::where('id', $id)->get()->toArray()),
            'options' => $this->options,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Boxes::where('id', $id)->update($request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'colour' => 'nullable|string',
        ]));
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Boxes::where('id', $id)->delete();
        return redirect('/');
    }
}
