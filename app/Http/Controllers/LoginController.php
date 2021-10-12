<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if ($this->loginService->checkLogin($request)) {
            return redirect()->route('userhomepage.blade.php');
        }

        Session::flash('error', 'Tài khoản mật khẩu không chính xác!');
        

        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    public function showFormChangePassword(){
        return view('change-password');
    }
    public function changePassword(Request $request){
        $user = Auth::user();
        $currentPassword = $user->password;
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:3',
            'confirmPassword' => 'required|same:newPassword',

        ]);
        if(!Hash::check($request->currentPassword, $currentPassword)){
            return redirect()->back()->withErrors(['currentPassword' => 'Sai Password hiện tại ']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->route('login');

    
    }

}
