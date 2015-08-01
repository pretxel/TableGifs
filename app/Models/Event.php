<?php

namespace Tablegifts\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
  protected $table = 'event';

  protected $hidden = ['created_at','updated_at'];

  protected $fillable = ['name'];
}
