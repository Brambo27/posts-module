<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title","body"];
    
    protected static function newFactory()
    {
        return \Modules\Posts\Database\factories\PostFactory::new();
    }
}
