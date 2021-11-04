<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\comment;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content'
    ];



    //class User extends Model
     public function  comments()
       {
           return $this->hasMany(comment::class,'post_id','id');
        }


        public function  tags()
       {

        return $this->belongsToMany(Tag::class, 'posts_tags', 'post_id', 'tag_id');
       }

       public function  getTagListAttribute()
       {

        $tags = $this->tags()->pluck('name')->all();
        return implode(', ', $tags);
       }
    
    

}