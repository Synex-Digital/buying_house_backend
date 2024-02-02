<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AdminController extends Controller
{
    // admin register view 
    function admin_register(){
        $admin = Admin::count();
        if ($admin != 0) {
            return redirect()->route('admin.login');
        } else {
            return view('backend.layouts.admin_register');
        }
    }

    // store new admin 
    function admin_store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'number' => 'required|min:11|numeric',
            'password' => 'required|min:8',
        ]);
        // $image = $request->profile;
        // if ($image) {
        //     $manager = new ImageManager(new Driver());
        //     $name_gen = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        //     $image = $manager->read($image);
        //     $image->save(public_path('admin/profile/'.$name_gen));
        //     $img_url = 'admin/profile/'.$name_gen;
        // }
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => bcrypt($request->password),
            'created_at' =>Carbon::now(),
        ]);

        $credentials =  $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()
                ->route('dashboard')
                ->with('Welcome! Your account has been successfully created!');
        }
    }


    // admin login viwe 
    function admin_login(){
        return view('backend.layouts.admin_login');
    }

    // admin login attempt 
    function login_admin(Request $request){
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('err', 'Email & Password Are Not Valid...');
        }
    }

    // dashboard view 
    function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
