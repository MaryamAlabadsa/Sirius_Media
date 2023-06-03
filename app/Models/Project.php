<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->morphMany(Image::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
