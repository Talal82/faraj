<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;
use Purifier;
use App\Aboutus;

class AboutController extends Controller
{
    protected $breadCrumb;
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin|cms-manager');
        $this -> breadCrumb = array(
            array(
                'link' => route('home'),
                'text' => 'Dashboard'
            ),
            array(
                'link' => '',
                'text' => 'About Us'
            ),
        );
    }

    public function index(){
    	$about = Aboutus::first();
    	return view('admin.aboutus.index') -> withAbout($about) -> withBreadCrumb($this -> breadCrumb);
    }

    public function update(Request $request, $id){
    	$this -> validate($request, array(
    		'aboutus_title' => 'required|string|max:255',
    		'aboutus_detail' => 'required|min:50',
    		'message_title' => 'required|string|max:255',
    		'message_detail' => 'required|min:50',
    		'mission_title' => 'required|string|max:255',
    		'mission_detail' => 'required|min:50',
    		'vision_title' => 'required|string|max:255',
    		'vision_detail' => 'required|min:50'
    	));

    	$about = Aboutus::findOrFail($id);
    	$about -> aboutus_title = ucwords(strtolower($request -> aboutus_title));
    	$about -> aboutus_detail = Purifier::clean($request -> aboutus_detail);
    	$about -> message_title = ucwords(strtolower($request -> message_title));
    	$about -> message_detail = Purifier::clean($request -> message_detail);
    	$about -> mission_title = ucwords(strtolower($request -> mission_title));
    	$about -> mission_detail = Purifier::clean($request -> mission_detail);
    	$about -> vision_title = ucwords(strtolower($request -> vision_title));
    	$about -> vision_detail = Purifier::clean($request -> vision_detail);

    	$about -> save();

    	Toastr::success('Information updated successfully!', 'Success!');
    	return redirect() -> route('about.index');
    }
}
