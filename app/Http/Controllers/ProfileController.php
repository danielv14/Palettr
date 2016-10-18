<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Palette;


class ProfileController extends Controller
{
    /*
    * Method for current logged in profile
    * Uses auth middleware in route file
    */
    public function index()
    {
      $palettes = Auth::user()
        ->palettes()
        ->orderBy('created_at', 'desc')
        ->get();

        // sum up all likes
        $likes = Auth::user()
          ->palettes()
          ->sum('likes');

      return view('profile.index', compact('palettes', 'likes'));
    }

}
