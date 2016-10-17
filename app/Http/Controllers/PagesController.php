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
      $popular = Palette::orderBy('created_at', 'ASC')->take(3)->get();
      return view('pages.index', [
        'palettes' => Palette::inRandomOrder()->get()
      ]);
    }

    public function popular () {
      return view('pages.specific', [
        'header' => 'Popular palettes',
        'subheader' => "Get them while they're hot",
        'palettes' => Palette::orderBy('likes', 'DESC')->simplePaginate(24)
      ]);
    }

    public function recent () {
      return view('pages.specific', [
        'header' => 'Most recent palettes',
        'subheader' => 'Steaming fresh from the oven',
        'palettes' => Palette::orderBy('created_at', 'DESC')->simplePaginate(24)
      ]);
    }
}
