<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Symfony\Component\HttpFoundation\Session\Session;
class adminloginController extends Controller
{
    public function admin(){

        return view('front\admin');
    }
    public function dash(){

        
    }

    public function adminloged(Request $request){

        $admin = admin::where('username',$request->username)->where('password', $request->password)->get()->toArray();

        if ($admin) {
            $request->session()->put('admin_session',$admin[0]['id']);
            return redirect('studentdetails/');
        } 
        else {
            session()->flash('coc','Email and Password not Match');
            return redirect('/admin/')->withInput();
        }
    }

}
