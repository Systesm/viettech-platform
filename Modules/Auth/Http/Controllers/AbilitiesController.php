<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Silber\Bouncer\Database\Ability;

class AbilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $abilities = Ability::all();
        return view('auth::abilities.index', compact('abilities'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('auth::abilities.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Ability::firstOrCreate($request->only([
          'name',
          'title'
        ]));
        return redirect()->route('abilities.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        return 'test';
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update($id, Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        Ability::findOrFail($id)->delete();
        return redirect()->back();
    }
}
