<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function signup()
    {
        return view('customer.cus_signup');
    }

    public function signin()
    {
        return view('customer.cus_signin');
    }

    public function check_login(Request $request)
    {
        $email = $request->input('email');
		$password = $request->input('password');
        
        $get_email = DB::table('ocean_breeze.tbl_admin')
        ->select('tbl_admin.email')
        ->where('email',$email)
        ->first();

        $get_password = DB::table('ocean_breeze.tbl_admin')
        ->select('tbl_admin.password')
        ->where('password',$password)
        ->first();

        $get_email_one = $get_email->email;
        $get_password_one = $get_password->password;

        if($email == $get_email_one && $password == $get_password_one){
            return view("customer.dashboard")->with('success','User Login successfully');
        }else{
            return view("customer.cus_signin")->with('warning','User Credentials Wrong');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function user_create(Request $request)
    {
        
        $email = $request->input('email');
		$password = $request->input('password');
		$confirmPassword = $request->input('confirmPassword');

        $data=array('email'=>$email,
					'password'=>$password,
					'confirmPassword'=>$confirmPassword,
		);

        DB::table('ocean_breeze.tbl_admin')
            ->insert($data);

        return view("customer.cus_signin");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
