<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
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

    }

    public function upateWebInfo(){

    }
}
