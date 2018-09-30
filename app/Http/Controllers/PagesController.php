<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('front_end.index');
    }

    public function about(){
    	return view('front_end.about');
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
    	return view('front_end.privacy-policy');
    }

    public function services(){
    	return view('front_end.services');
    }
}
