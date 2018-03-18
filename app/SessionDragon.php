<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionDragon extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'session_id',
      'dragon_id'
  ];
}
