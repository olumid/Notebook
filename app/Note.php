<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'body', 'notebook_id'];


    public function notebooks(){
        return $this->belongsTo('App\Notebook');
    }
}

