<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Palette;

use App\User;

class PagesController extends Controller
{
    public function index ()
    {
      return view('pages.index', [
        'palettes' => Palette::all()
      ]);
    }
}
