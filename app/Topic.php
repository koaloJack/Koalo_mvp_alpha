<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    protected $fillable = [
        'topic',
    ];
    //
    public function search_strings()
    {
        return $this->hasMany('App\Search_String');
    }
}
