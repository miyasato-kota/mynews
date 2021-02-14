<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function profile()
    {
        return view('admin.profile.create');
    }
    
    public function profile_edit()
    {
        return view('admin.profile.edit');
    }
    
    public function create(Request $request)
    {
        // admin/profile/createにリダイレクトする
        return redirect('admin/profile/create');
    }
    
    public function update(Request $request)
    {
        // admin/profile/editにリダイレクトする
        return redirect('admin/profile/edit');
    }
}
