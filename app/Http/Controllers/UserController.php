<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Toastr;

class UserController extends BaseController
{

    protected $breadCrumb;
    public function __construct()
    {   
        $this->middleware('auth');
        $this->middleware('permission:manage-users');
        $this -> breadCrumb = array(
            array(
                'link' => route('home'),
                'text' => 'Dashboard'
            ),
            array(
                'link' => route('users.index'),
                'text' => 'Users'
            ),
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crumb = array(
            'link' => '',
            'text' => 'Index'
        );
        array_push($this -> breadCrumb, $crumb);
        $users = User::orderBy('id', 'DESC') -> get();
        return view('admin.users.index') -> withUsers($users) -> withBreadCrumb($this -> breadCrumb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crumb = array(
            'link' => '',
            'text' => 'Create'
        );
        array_push($this -> breadCrumb, $crumb);
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create') -> withRoles($roles) -> withBreadCrumb($this -> breadCrumb);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|min:10|max:255',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);


        // $user = new User;
        // $user -> first_name = $request -> first_name;
        // $user -> last_name = $request -> last_name;
        // $user -> email = $request -> email;
        // $user -> address = $request -> address;
        // $user -> password = $request -> password;
        // $user->assignRole($request->input('roles'));

        // $user -> save();

        $input = $request->all();

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        Toastr::success('User created successfully!', 'Success');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crumb = array(
            'link' => '',
            'text' => 'Show'
        );
        array_push($this -> breadCrumb, $crumb);
        $user = User::find($id);
        return view('admin.users.show') -> withUser($user) -> withBreadCrumb($this -> breadCrumb);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crumb = array(
            'link' => '',
            'text' => 'Edit'
        );
        array_push($this -> breadCrumb, $crumb);
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $breadCrumb = $this -> breadCrumb;

        return view('admin.users.edit',compact('user','roles','userRole','breadCrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'address' => 'required|min:10|max:255',
            'password' => 'sometimes|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(empty($input['password'])){ 
            $input = array_except($input,array('password'));
        }
        
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        Toastr::success('User updated successfully!', 'Success');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user -> delete();
        Toastr::success('User Deleted Successfully!');
        return redirect() -> route('users.index');
    }

    public function changeStatus($id){
        $user = User::findOrFail($id);
        if($user -> status == true){
            $user -> status = false;
        }
        else{
            $user -> status = true;
        }
        $user -> save();
        Toastr::success('User Status changed successfully!', 'Success');
        return redirect() -> route('users.index');
    }

    public function deleteMultiple(Request $request){
        
        $ids = $request->ids;
        User::whereIn('id',explode(",",$ids))->delete();

        return response()->json(['status'=>true,'message'=>"User(s) deleted successfully."]);   

    }
}
