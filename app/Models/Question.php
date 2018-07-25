<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = ['question', 'category_id', 'author', 'published', 'created_at'];

    /** Связь с моделью ответов. Каждый вопрос имеет один ответ
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }

    /** Связь с моделью категорий
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

}
