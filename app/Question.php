<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $guard=[];

    public function user()
    {
        return $this->belongsTo(App\User::class);
    }
}
