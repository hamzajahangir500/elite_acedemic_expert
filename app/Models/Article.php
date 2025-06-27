<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['_token'];


    public function theme() {
        return $this->belongsTo('App\Models\Theme', 'theme_id', 'id');
    }

    public function author() {
        return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }
}
