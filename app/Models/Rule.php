<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
        public function user()
    {
        return $this->hasMany('App\User','rule_id');
    }

}
