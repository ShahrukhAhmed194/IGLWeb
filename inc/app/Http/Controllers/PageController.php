<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(Request $request){

        return view('frontend.pages.index');
    }

    public function showAbout(Request $request){

        return view('frontend.pages.about');
    }

    public function showTeam(Request $request){

        return view('frontend.pages.team');
    }
    
    public function showBlog(Request $request){

        return view('frontend.pages.blog');
    }

    public function showServices(Request $request){

        return view('frontend.pages.services');
    }

    public function showService()
    {      
        return view('frontend.pages.service');
    }

    public function showCareer(Request $request){

        return view('auth.register');
    }


    // public function showSettings(Request $request){

    //     return view('backend.pages.settings');
    // }

   
}
