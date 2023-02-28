<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getTitleLangAttribute()
    {
        $currentLocale = app()->getLocale();
        if ($currentLocale === 'ar') {
            return $this->title_ar;
        } else {
            return $this->title;
        }
    }
    public function getDecriptionLangAttribute(){
        $currentLocale = app()->getLocale();
        if ($currentLocale === 'ar') {
            return $this->description_ar;
        } else {
            return $this->description;
        }
    }

}
