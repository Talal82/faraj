<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	protected $breadCrumb;
    public function __construct(){
    	$this -> middleware('auth');
    	$this -> breadCrumb = array(
            array(
                'link' => route('home'),
                'text' => 'Dashboard'
            ),
        );
    }

    public function getDashboard(){
    	$crumb = array(
    		'link' => '',
    		'text' => 'User Profile'
    	);
    	array_push($this -> breadCrumb, $crumb);
    	return view('home') -> withBreadCrumb($this -> breadCrumb);
    }
}
