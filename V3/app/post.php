<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [
//        'cat_id', 'user_id', 'title', 'image', 'description', 'recipe', 'preparation_time', 'cooking_time', 'serving_people',
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
