<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Palette;

use App\User;


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

      return view('profile.index', compact('palettes'));
    }

}
