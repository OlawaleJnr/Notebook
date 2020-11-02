<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id', 'name'
    ];

    public function notes() {
        return $this->hasMany('App\Note');
    }
}
