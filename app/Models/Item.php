<?php

namespace Tablegifts\Models;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
  protected $table = 'item';

  protected $hidden = ['created_at','updated_at'];

  protected $fillable = ['name','amount'];
}
