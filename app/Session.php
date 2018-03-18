<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'problem',
  ];
  
  public function dragons()
  {
    return $this->belongsToMany(
      Dragon::Class,
      'session_dragon'
    );
  }

  public function messages()
  {
    return $this->hasMany(Message::Class);
  }
}
