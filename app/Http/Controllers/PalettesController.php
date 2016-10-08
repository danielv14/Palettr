<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PaletteRequest;

use Auth;

use App\Palette;

class PalettesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('palettes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaletteRequest $request)
    {
        $palette = new Palette($request->all());

        Auth::user()->palettes()->save($palette);

        return redirect()->action('ProfileController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $palette = Palette::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $palette = Palette::findOrFail($id);
        return view('palettes.edit', compact('palette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaletteRequest $request, $id)
    {
      $palette = Palette::findOrFail($id);

      $palette->user()->associate(Auth::user()->id)->update($request->all());

      return redirect()->action('ProfileController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $palette = Palette::findOrFail($id);

        $palette->delete();


    }
}
