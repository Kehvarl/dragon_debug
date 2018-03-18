<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DebugMessage extends Model
{
  protected $table = "messages";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id',
        'text'
    ];

    public function session()
    {
      return $this->belongsTo(DebugSession::Class);
    }
}
