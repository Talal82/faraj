<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivacyPolicy;
use App\Aboutus;

class PagesController extends Controller
{
    public function index() {
    	return view('front_end.index');
    }

    public function about(){
        $about = Aboutus::first();
    	return view('front_end.about') -> withAbout($about);
    }

    public function careers(){
    	return view('front_end.careers');
    }

    public function clients(){
    	return view('front_end.clients');
    }

    public function companiesDetail(){
    	return view('front_end.companies-detail');
    }

    public function contact(){
    	return view('front_end.contact');
    }

    public function holdingCompanies(){
    	return view('front_end.holding-companies');
    }

    public function multimedia(){
    	return view('front_end.multimedia');
    }

    public function privacyPolicy(){
        $policy = PrivacyPolicy::first();
        return view('front_end.privacy-policy') -> withPolicy($policy);
    }

    public function services(){
    	return view('front_end.services');
    }
}
