<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LendingMethod extends Model
{
    protected $fillable=[
      'name','description','avatar'
    ];
}
