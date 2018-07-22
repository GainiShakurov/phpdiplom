<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = ['question', 'category_id', 'author', 'published', 'created_at'];

    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

}
