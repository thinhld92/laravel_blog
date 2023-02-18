<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use App\Models\Website;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $data = [];

    public function editSocials(){
        $social = Social::first();
        $this->data['page_title'] = "Cài đặt mạng xã hội";
        $this->data['social'] = $social;
        return view('backend.settings.socials.edit', $this->data);
    }

    public function updateSocials(Request $request){
        $social = Social::first();
        if($social){
            $social->facebook = $request->facebook;
            $social->instagram = $request->instagram;
            $social->twitter = $request->twitter;
            $social->youtube = $request->youtube;
            $social->tiktok = $request->tiktok;
            $social->linkedin = $request->linkedin;
            $social->medium = $request->medium;
            $social->zalo = $request->zalo;
            $social->update();
        }
        return back()->with('success', 'Cập nhật mạng xã hội thành công');
    }

    public function editWebInfo(){
        $website = Website::first();
        $this->data['page_title'] = "Cài đặt thông tin website";
        $this->data['website'] = $website;
        return view('backend.settings.seos.edit', $this->data);
    }

    public function updateWebInfo(Request $request){
        $website = Website::first();
        if ($website) {
            $website->meta_title = $request->meta_title;
            $website->author = $request->author;
            $website->author_description = $request->author_description;
            $website->meta_description = $request->meta_description;
            $website->meta_type = $request->meta_type;
            $website->logo = $request->logo;
            $website->author_image = $request->author_image;
            $website->meta_keywords = $request->meta_keywords;
            $website->meta_robots = $request->meta_robots;
            $website->google_analytics = $request->google_analytics;
            $website->google_verification = $request->google_verification;
            $website->alexa_analytics = $request->alexa_analytics;
            $website->update();
        }
        return back()->with('success', 'Cập nhật mạng xã hội thành công');
    }
}
