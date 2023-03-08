<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


//MyModel::create([
// 'json_key'
//'json_data' => ['image' => 'John Doe', 'title' => 30],
//]);
    protected $casts = [
        'json_data' => 'array',
    ];

    public function getSliderAttribute()
    {
        $array = json_decode($this->json_data, true);

        $currentLocale = app()->getLocale();

        $image = url('/public/Image/' . $array['image']) ;

        if ($currentLocale === 'ar') {
            $title = $array['title_ar'];
            $sub_title = $array['sub_title_ar'];
        } else {
            $title = $array['title_en'];
            $sub_title = $array['sub_title_en'];
        }

        return [$title, $sub_title, $image];

    }

    public function getNoteAttribute()
    {
        $currentLocale = app()->getLocale();
        $array = json_decode($this->json_data, true);

        if ($currentLocale === 'ar') {
            $title = $array['title_ar'];
        } else {
            $title = $array['title_en'];
        }
        return [$title];

    }
    public function getAboutAttribute()
    {
        $currentLocale = app()->getLocale();
        $array = json_decode($this->json_data, true);

        $image1 = url('/public/Image/' . $array['image1']);
        $image2 = url('/public/Image/' . $array['image2']);
        if ($currentLocale === 'ar') {
            $title1 = $array['title_ar1'];
            $sub_title1 = $array['sub_title1_ar1'];
            $title2 = $array['title_ar2'];
            $sub_title2 = $array['sub_title_ar2'];
            $title3 = $array['title_ar3'];
            $sub_title3 = $array['sub_title_ar3'];
            $section_title = $array['section_title_ar'];
        } else {
            $title1 = $array['title_en1'];
            $sub_title1 = $array['sub_title_en1'];
            $title2 = $array['title_en2'];
            $sub_title2 = $array['sub_title_en2'];
            $title3 = $array['title_en3'];
            $sub_title3 = $array['sub_title_en3'];
            $section_title = $array['section_title'];
        }
        return [$title1, $sub_title1, $title2, $sub_title2, $title3, $sub_title3, $image1, $image2, $section_title];

    }
}
