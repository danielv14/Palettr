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
      return view('profile.index');
    }

    /*
    * Display a users profile
    */
    public function profile ($id)
    {
      return view('profile.profile', [
        'profile' => User::findOrFail($id)
      ]);
    }
}
