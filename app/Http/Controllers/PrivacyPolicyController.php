<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivacyPolicy;
use Purifier;
use Toastr;

class PrivacyPolicyController extends Controller
{
	protected $breadCrumb;
    public function __construct(){
    	$this -> middleware('auth');
    	$this -> breadCrumb = array(
            array(
                'link' => route('home'),
                'text' => 'Dashboard'
            ),
            array(
                'link' => '',
                'text' => 'Privacy Policy'
            ),
        );
    }

    public function index(){
    	$policy = PrivacyPolicy::first();
    	return view('admin.policies.index') -> withPolicy($policy) -> withBreadCrumb($this -> breadCrumb);
    }

    public function update(Request $request, $id){
    	$this -> validate($request, array(
    		'name' => 'required|string|max:255',
    		'detail' => 'required|'
    	));

    	$policy = PrivacyPolicy::findOrFail($id);
    	$policy -> name = ucwords(strtolower($request -> name));
    	$policy -> detail = Purifier::clean($request -> detail);
    	$policy -> save();

    	Toastr::success('Policy Updated successfully!', 'Success!');
    	return redirect() -> back();
    }
}
