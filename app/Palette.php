<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'color1', 'color2', 'color3', 'color4', 'user_id'
  ];

  /*
  * get the user attached to a palette
  */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
