<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'json_data' => 'array',
    ];

    // public function getSliderControlPanelAttribute()
    // {
    //     $array = $this->json_data;
    //     $video = $array['video'] ?? null;
    //     $image = $video ? asset('storage/videos/' . $video) : null;

    //     $title_ar = $array['title_ar'] ?? null;
    //     $sub_title_ar = $array['sub_title_ar'] ?? null;
    //     $title = $array['title_en'] ?? null;
    //     $sub_title = $array['sub_title_en'] ?? null;

    //     return [$title, $title_ar, $sub_title, $sub_title_ar, $image];
    // }

    public function getSliderAttribute()
    {
        $array = json_decode($this->json_data, true);
        //        $array = $this->json_data;

        $currentLocale = app()->getLocale();
        $video = $array['video'] ?? null;
        $image = $video ? asset('storage/videos/' . $video) : null;
        //dd($array);
        if ($currentLocale === 'ar') {
            $title = $array['title_ar'];
            $sub_title = $array['sub_title_ar'];
        } else {
            $title = $array['title_en'];
            $sub_title = $array['sub_title_en'];
        }

        return [$title, $sub_title, $image];
    }

    public function getLinkAttribute()
    {

        $array = $this->json_data; // Assuming $this->json_data is already an array

        $facebook_link = isset($array['facebook_link']) ? $array['facebook_link'] : null;
        $twitter_link = isset($array['twitter_link']) ? $array['twitter_link'] : null;
        $behance_link = isset($array['behance_link']) ? $array['behance_link'] : null;
        $whatsapp_link = isset($array['whatsapp_link']) ? $array['whatsapp_link'] : null;
        $dribbble_link = isset($array['dribbble_link']) ? $array['dribbble_link'] : null;
        $instegram_link = isset($array['instegram_link']) ? $array['instegram_link'] : null;
        $linkedin_link = isset($array['linkedin_link']) ? $array['linkedin_link'] : null;

        return [$facebook_link, $twitter_link, $behance_link, $whatsapp_link, $dribbble_link, $instegram_link, $linkedin_link];
        // $array = json_decode($this->json_data, true);
        // $facebook_link = $array['facebook_link'];
        // $twitter_link = $array['twitter_link'];

        // $behance_link = $array['behance_link'];
        // $whatsapp_link = $array['whatsapp_link'];
        // $instegram_link = $array['instegram_link'];
        // $linkedin_link = $array['linkedin_link'];

        // return [$facebook_link, $twitter_link, $behance_link, $whatsapp_link, $instegram_link, $linkedin_link];
    }

    public function getNoteControlPanelAttribute()
    {
        $array = $this->json_data;

        $title_ar = $array['title_ar'] ?? null;
        $title = $array['title_en'] ?? null;
        return [$title, $title_ar];
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

    public function getPrivacyAttribute()
    {
        $currentLocale = app()->getLocale();
        $array = $this->json_data;

        if ($currentLocale === 'en') {
            $privacy_policy = $array['privacy_policy_en'];
        } else {
            $privacy_policy = $array['privacy_policy_ar'];
        }
        return [$privacy_policy];
    }

    public function getLogoAttribute()
    {

        $array = $this->json_data;
        $logo = $array['logo'];
        return [$image1];
    }

    public function getConditionsAttribute()
    {
        $currentLocale = app()->getLocale();
        $array = $this->json_data;

        if ($currentLocale === 'en') {

            $term_condition = $array['term_condition_en'];
        } else {

            $term_condition = $array['term_condition_ar'];
        }
        return [$term_condition];
    }

    public function getAboutControlPanelAttribute()
    {
        $array = $this->json_data;
        $image1 = $array['image1'] ?? null;
        $image2 = $array['image2'] ?? null;
        $title1_ar1 = $array['title1_ar1'] ?? null;
        $sub_title1_ar1 = $array['sub_title1_ar1'] ?? null;
        $title2_ar1 = $array['title2_ar1'] ?? null;
        $sub_title2_ar1 = $array['sub_title2_ar1'] ?? null;
        $title3_ar1 = $array['title3_ar1'] ?? null;
        $sub_title3_ar1 = $array['sub_title3_ar1'] ?? null;
        $section_title_ar1 = $array['section_title_ar1'] ?? null;
        $title1 = $array['title1_en'] ?? null;
        $sub_title1 = $array['sub_title1_en'] ?? null;
        $title2 = $array['title2_en'] ?? null;
        $sub_title2 = $array['sub_title2_en'] ?? null;
        $title3 = $array['title3_en'] ?? null;
        $sub_title3 = $array['sub_title3_en'] ?? null;
        $section_title = $array['section_title_en'] ?? null;


        return [$title1, $title1_ar1, $sub_title1, $sub_title1_ar1, $title2, $title2_ar1, $sub_title2, $sub_title2_ar1, $title3, $title3_ar1, $sub_title3, $sub_title3_ar1, $image1, $image2, $section_title, $section_title_ar1];
    }


    public function getAboutAttribute()
    {
        $currentLocale = app()->getLocale();
        $array = json_decode($this->json_data, true);

        $image1 =   url('/storage/' . $array['image1']);
        $image2 =   url('/storage/' . $array['image2']);
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

    public function comments()
    {
        return $this->morphMany(Comment::class, 'object', 'object_type', 'object_id', 'id');
    }
}
