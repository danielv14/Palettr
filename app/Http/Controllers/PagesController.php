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
      $recent = Palette::orderBy('created_at', 'DESC')->take(3)->get();
      return view('pages.index', [
        'popular' => $popular,
        'recent' => $recent
      ]);
    }
}
