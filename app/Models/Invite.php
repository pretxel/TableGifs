<?php

namespace Tablegifts\Models;

use Illuminate\Database\Eloquent\Model;


class Invite extends Model
{
  protected $table = 'invite';

  protected $hidden = ['created_at','updated_at'];

  protected $fillable = ['name','email'];
}
