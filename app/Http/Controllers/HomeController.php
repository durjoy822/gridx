<?php

namespace App\Http\Controllers;

use App\Models\About_info;
use App\Models\AdminProfileInfo;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\CvUpload;
use App\Models\Education;
use App\Models\Offer;
use App\Models\Project;
use App\Models\Slider;
use App\Models\SocialMeida;
use App\Models\Work;
use App\Models\Working_exprience;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Home(){
        return view('home.home',[
            'slider'=>Slider::first(),
            'socialMedias'=>SocialMeida::where('status',1)->inRandomOrder()->take(2)->get(),
            'about'=>AdminProfileInfo::first(),

        ]);
    }
    public function About(){
        return view('home.about',[
            'experiences'=>Working_exprience::get(),
            'educations'=>Education::get(),
            'socialMedias'=>SocialMeida::inRandomOrder()->take(2)->get(),
//            'about'=>About_info::first(),
            'about'=>AdminProfileInfo::first(),
        ]);
    }
    public function Work(){
        return view('home.work',[
            'categorys'=>Work::where('status',1)->get(),
            'leftprojects'=>Work::where('status',1)->where('side','left')->get(),
            'rightprojects'=>Work::where('status',1)->where('side','right')->get(),
        ]);
    }
    public function Contact(){
        return view('home.contact',[
            'socialMedias'=>SocialMeida::where('status',1)->inRandomOrder()->take(3)->get(),
            'contact'=>Contact::first(),
        ]);
    }
    public function Blog(){
        return view('home.blog',[
            'leftblogs'=>Blog::where('status',1)->where('side','left')->get(),
            'rightblogs'=>Blog::where('status',1)->where('side','right')->get(),
        ]);
    }
    public function Skill(){
        return view('home.skill',[
            'chartData' => Skill::all(),
        ]);
    }

    public function blogDetails($id){
        return view('home.blog-details',[
            'blogDetails'=>Blog::where('id',$id)->first(),
        ]);
    }
    public function Service(){
        return view('home.service',[
            'services'=>Offer::where('status',1)->inRandomOrder()->take(6)->get(),
            'socialMedias'=>SocialMeida::where('status',1)->inRandomOrder()->take(2)->get(),

        ]);
    }
    public function Client(){
        return view('home.client',[
            'clients'=>Client::inRandomOrder()->get(),
        ]);
    }
}
