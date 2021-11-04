<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id' ,
        'comment',
        'name',
        'email',
    ];

   public function post()
{

    return $this->belongsTo(Post::class,'post_id', 'id');
}

}

