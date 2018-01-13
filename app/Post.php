<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name (plural by default)
    // protected $table = 'posts';
    public $primaryKey = 'id';
    
    // Timestamps
    // public $timestamps = true;
    public function user() {
        return $this->belongsTo('App\User');
    }
}
