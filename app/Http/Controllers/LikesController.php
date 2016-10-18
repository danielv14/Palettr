<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Palette;

class LikesController extends Controller
{
    public function getLikes ($id)
    {
      $palette = Palette::findOrFail($id);
      return response()->json([
        'likes' => $palette->likes
      ]);

    }

    public function like (Request $request, $id)
    {
      // find the palette in context
      $palette = Palette::findOrFail($id);
      // increment current like value with 1 new like
      $palette->likes = $palette->likes + 1;
      // save the palette
      $palette->save();
    }

    public function unlike (Request $request, $id)
    {
      // find the palette in context
      $palette = Palette::findOrFail($id);
      // decrement current like value with 1 new like
      $palette->likes = $palette->likes - 1;
      // save the palette
      $palette->save();
    }
}
