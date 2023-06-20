<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class InfoController extends Controller
{

    public function indexSlider()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'slider')
            ->first();
        if ($slider) {
            $sliderData = $slider->slider_control_panel;
        } else {
            $sliderData = null;
        }

        return view('controlPanel.sliderSection.index', compact('sliderData'));
    }

    public function indexAbout()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'about')
            ->first();
        if ($slider) {
            $aboutData = $slider->about_control_panel;
        } else {
            $aboutData = null;
        }

        return view('controlPanel.aboutSection.index', compact('aboutData'));
    }

    public function indexNote()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'note')
            ->first();
        if ($slider) {
            $sliderData = $slider->note_control_panel;
        } else {
            $sliderData = null;
        }

        return view('controlPanel.noteSection.index', compact('sliderData'));
    }

    public function indexLink()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'link')
            ->first();
        if ($slider) {
            $sliderData = $slider->note_control_panel;
        } else {
            $sliderData = null;
        }

        return view('controlPanel.links.index', compact('sliderData'));
    }

    public function indexStyle()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'style')
            ->first();
        if ($slider) {
            $sliderData = $slider->note_control_panel;
        } else {
            $sliderData = null;
        }

        return view('controlPanel.style.index', compact('sliderData'));
    }

    public function indexPrivacy()
    {
        $slider = Info::select('json_data')
            ->where('json_key', 'privacy')
            ->first();
        if ($slider) {
            $sliderData = $slider->note_control_panel;
        } else {
            $sliderData = null;
        }

        return view('controlPanel.style.index', compact('sliderData'));
    }

    //store

    public function storeSlider(StoreInfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'video_upload' => 'file|mimes:mp4,mov,avi',
            'title_en' => 'required',
            'title_ar' => 'required|string|regex:/^[\p{Arabic}\p{P}\p{N}\s]+$/u',
            'sub_title_en' => 'required',
            'sub_title_ar' => 'required|string|regex:/^[\p{Arabic}\p{P}\p{N}\s]+$/u',
            'json_key' => 'required|string|in:slider,note,about',
        ]);
        $videoPath = null;
        if ($request->hasFile('video_upload')) {
            $videoPath = $request->file('video_upload')->store('public', 'public');
        }

        $sliderData = Info::where('json_key', $request->json_key)->value('json_data') ?: [];

        $sliderData = tap($sliderData, function (&$data) use ($videoPath, $validatedData) {
            if ($videoPath) {
                if (isset($data['video'])) {
                    optional(Storage::delete($data['video']))->when(Storage::exists($data['video']));
                }

                $data['video'] = $videoPath;
            }

            $data['title_en'] = $validatedData['title_en'];
            $data['title_ar'] = $validatedData['title_ar'];
            $data['sub_title_en'] = $validatedData['sub_title_en'];
            $data['sub_title_ar'] = $validatedData['sub_title_ar'];
        });


        if ($request->json_key === 'slider') {
            Info::updateOrCreate(['json_key' => $request->json_key], ['json_data' => $sliderData]);
        } else {
            return redirect()->back()->withErrors(['json_key' => 'Invalid json_key']);
        }

        return redirect()->back()->with('success', ucfirst($request->json_key) . ' ' . (isset($slider) && $slider->wasRecentlyCreated ? 'created' : 'updated') . ' successfully');
    }

    public function storeNote(StoreInfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title_en' => 'required|alpha',
            'title_ar' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'json_key' => 'required|string|in:slider,note,about',
        ]);

        $jsonKey = $validatedData['json_key'];
        $sliderData = Info::where('json_key', $jsonKey)->value('json_data') ?: [];

        $sliderData['title_en'] = $validatedData['title_en'];
        $sliderData['title_ar'] = $validatedData['title_ar'];

        if ($jsonKey === 'note') {
            Info::updateOrCreate(['json_key' => $jsonKey], ['json_data' => $sliderData]);
        } else {
            return redirect()->back()->withErrors(['json_key' => 'Invalid json_key']);
        }

        $action = isset($slider) && $slider->wasRecentlyCreated ? 'created' : 'updated';
        $message = ucfirst($jsonKey) . ' ' . $action . ' successfully';

        return redirect()->back()->with('success', $message);
    }


    public function storeAbout(StoreInfoRequest $request)
    {
        $validatedData = $request->validate([
            'image1' => 'file|image',
            'image2' => 'file|image',
            'title1_en' => 'required|alpha',
            'title1_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'sub_title1_en' => 'required|alpha',
            'sub_title1_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'title2_en' => 'required|alpha',
            'title2_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'sub_title2_en' => 'required|alpha',
            'sub_title2_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'title3_en' => 'required|alpha',
            'title3_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'sub_title3_en' => 'required|alpha',
            'sub_title3_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
            'section_title_en' => 'required|alpha',
            'section_title_ar1' => 'required|string|regex:/^[\p{Arabic}\s]+$/u',
        ]);

        $image1Path = null;
        if ($request->hasFile('image1')) {
            $image1Path = $request->file('image1')->store('public', 'public');
        }

        $image2Path = null;
        if ($request->hasFile('image2')) {
            $image2Path = $request->file('image2')->store('public', 'public');
        }

        $sliderData = [
            'title1_en' => $validatedData['title1_en'],
            'title1_ar1' => $validatedData['title1_ar1'],
            'sub_title1_en' => $validatedData['sub_title1_en'],
            'sub_title1_ar1' => $validatedData['sub_title1_ar1'],
            'title2_en' => $validatedData['title2_en'],
            'title2_ar1' => $validatedData['title2_ar1'],
            'sub_title2_en' => $validatedData['sub_title2_en'],
            'sub_title2_ar1' => $validatedData['sub_title2_ar1'],
            'title3_en' => $validatedData['title3_en'],
            'title3_ar1' => $validatedData['title3_ar1'],
            'sub_title3_en' => $validatedData['sub_title3_en'],
            'sub_title3_ar1' => $validatedData['sub_title3_ar1'],
            'section_title_en' => $validatedData['section_title_en'],
            'section_title_ar1' => $validatedData['section_title_ar1'],
        ];

        if ($image1Path) {
            $sliderData['image1'] = $image1Path;
        }

        if ($image2Path) {
            $sliderData['image2'] = $image2Path;
        }

        Info::updateOrCreate(['json_key' => 'about'], ['json_data' => $sliderData]);

        return redirect()->back()->with('success', 'About updated successfully');
    }

    public function storeLink(StoreInfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'facebook_link' => 'required | string',
            'twitter_link' => 'required | string',
            'behance_link' => 'required | string',
            'whatsapp_link' => 'required | string',
            'dribbble_link' => 'required | string',
            'instegram_link' => 'required | string',
            'linkedin_link' => 'required | string',
            'json_key' => 'required | string',
        ]);

        $jsonKey = $validatedData['json_key'];
        $sliderData = Info::where('json_key', $jsonKey)->value('json_data') ?: [];

        $sliderData['facebook_link'] = $validatedData['facebook_link'];
        $sliderData['twitter_link'] = $validatedData['twitter_link'];
        $sliderData['behance_link'] = $validatedData['behance_link'];
        $sliderData['whatsapp_link'] = $validatedData['whatsapp_link'];
        $sliderData['dribbble_link'] = $validatedData['dribbble_link'];

        $sliderData['instegram_link'] = $validatedData['instegram_link'];
        $sliderData['linkedin_link'] = $validatedData['linkedin_link'];
        // if ($jsonKey === 'note') {
        Info::updateOrCreate(['json_key' => $jsonKey], ['json_data' => $sliderData]);
        // } else {
        //     return redirect()->back()->withErrors(['json_key' => 'Invalid json_key']);
        // }

        $action = isset($slider) && $slider->wasRecentlyCreated ? 'created' : 'updated';
        $message = ucfirst($jsonKey) . ' ' . $action . ' successfully';

        return redirect()->back()->with('success', $message);
    }

    public function storeStyle(StoreInfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validate([
            // 'first_color' => 'required | string',
            // 'second_color' => 'required | string',
            'logo' => 'required',
            'comment_image' => 'required',
            'contact_image' => 'required',
            'json_key' => 'required | string',
        ]);

        $jsonKey = $validatedData['json_key'];
        $sliderData = Info::where('json_key', $jsonKey)->value('json_data') ?: [];

        // $sliderData['first_color'] = $validatedData['first_color'];
        // $sliderData['second_color'] = $validatedData['second_color'];

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public', 'public');
        }

        $commentImagePath = null;
        if ($request->hasFile('comment_image')) {
            $commentImagePath = $request->file('comment_image')->store('public', 'public');
        }

        $contactImagePath = null;
        if ($request->hasFile('contact_image')) {
            $contactImagePath = $request->file('contact_image')->store('public', 'public');
        }

        if ($logoPath) {
            $sliderData['logo'] = $logoPath;
        }

        if ($commentImagePath) {
            $sliderData['comment_image'] = $commentImagePath;
        }

        if ($contactImagePath) {
            $sliderData['contact_image'] = $contactImagePath;
        }

        Info::updateOrCreate(['json_key' => $jsonKey], ['json_data' => $sliderData]);

        $action = isset($slider) && $slider->wasRecentlyCreated ? 'created' : 'updated';
        $message = ucfirst($jsonKey) . ' ' . $action . ' successfully';

        return redirect()->back()->with('success', $message);
    }

    public function storePrivacy(StoreInfoRequest $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'privacy_policy_en' => 'required | string',
            'privacy_policy_ar' => 'required | string',
            'term_condition_en' => 'required | string',
            'term_condition_ar' => 'required | string',
            'json_key' => 'required | string',
        ]);

        $jsonKey = $validatedData['json_key'];
        $sliderData = Info::where('json_key', $jsonKey)->value('json_data') ?: [];

        $sliderData['privacy_policy_en'] = $validatedData['privacy_policy_en'];
        $sliderData['privacy_policy_ar'] = $validatedData['privacy_policy_ar'];
        $sliderData['term_condition_en'] = $validatedData['term_condition_en'];
        $sliderData['term_condition_ar'] = $validatedData['term_condition_ar'];

        Info::updateOrCreate(['json_key' => $jsonKey], ['json_data' => $sliderData]);

        $action = isset($slider) && $slider->wasRecentlyCreated ? 'created' : 'updated';
        $message = ucfirst($jsonKey) . ' ' . $action . ' successfully';

        return redirect()->back()->with('success', $message);
    }
}
