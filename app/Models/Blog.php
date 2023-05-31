<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title', 'description', 'completed_time'];

    public function images()
    {
        return $this->morphMany(Image::class, 'object', 'object_type', 'object_id', 'id');
    }
}
