<?php

namespace Niloofarfs\Oreo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Niloofarfs\Oreo\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
