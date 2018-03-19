<?php

namespace App\Http\Controllers;

use App\Dragon;
use Session;
use Redirect;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('layouts/dragon/index', ['dragons' => Dragon::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $dragon = new Dragon();
      $dragon->name = $request['name'];
      $dragon->save();

      Session::flash("flash_message", "Dragon succesfully added");
      return Redirect::to('dragon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dragon  $dragon
     * @return \Illuminate\Http\Response
     */
    public function show(Dragon $dragon)
    {
        return view('layouts/dragon/show', ['dragon' => $dragon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dragon  $dragon
     * @return \Illuminate\Http\Response
     */
    public function edit(Dragon $dragon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dragon  $dragon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dragon $dragon)
    {
      {
        //$dragon = Dragon::find($id);
        $dragon->name = $request['name'];
        $dragon->save();
      }
      return Redirect::to('dragon/'.$dragon->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dragon  $dragon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dragon $dragon)
    {
      Dragon::destroy($id);
      return Redirect::to('dragon');
    }
}
