<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function LoginForm()
    {
            return view('admin_auth.login');
    }
    public function RegisterForm()
    {
            return view('admin_auth.register');
    }


    public function adminlogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(url('/home'));
        } else {
            return redirect()->back()->withErrors('Credentials doesn\'t match.');
        }
    }

    public function adminstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required',
//            'image' => 'required',
        ]);
        $data = $request->except('image', 'confirmed_password','password');
        $data['password'] = Hash::make($request->password);


//        if ($request->image) {
//            $data['image'] = $request->image->hashName();
//            $request->image->move(public_path('/uploads/admin/'), $data['image']);
//        }

        Admin::create($data);

        toast('admin created successfully!', 'success');
        return redirect()->route('home');
    }


    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
