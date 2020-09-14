<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'image_url',
        'content',
    ];

    // Relation One-To-Many 
    //   --> relazione inversa
    public function user() {
        return $this->belongsTo('App\User');
    }

}
