<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'name','description'
    ];
    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
