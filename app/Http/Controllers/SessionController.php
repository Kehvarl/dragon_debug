<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\DebugSession;
use \App\DebugMessage;
use \App\Dragon;
use Session;
use Redirect;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts/session/index', ['sessions' => DebugSession::get()]);
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
        $session = new DebugSession();
        $session->problem = $request['problem'];
        $session->save();

        Session::flash("flash_message", "Session succesfully added");
        return Redirect::to('session');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('layouts/session/show', ['session' => DebugSession::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if(isset($request['dragon']))
        {
          $session = DebugSession::find($id);
          $session->dragons()->syncWithoutDetaching(Dragon::inRandomOrder()->first());
        }
        elseif (isset($request['text']))
        {
          $session = DebugSession::find($id);
          $message = new DebugMessage();
          $message->text = $request['text'];
          $session->messages()->save($message);
        }
        return Redirect::to('session/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DebugSession::destroy($id);
        return Redirect::to('session');
    }
}
