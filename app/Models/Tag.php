<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
       'name'
        
    ];
    
    public function  posts()
    {

     return $this->belongsToMany(Tag::class, 'tags_posts', 'post_id', 'tag_id');
    }
}
