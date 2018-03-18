<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dragon extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name'
  ];

  public function sessions()
  {
    return $this->belongsToMany(
      DebugSession::Class,
      'session_dragon'
    );
  }
}
