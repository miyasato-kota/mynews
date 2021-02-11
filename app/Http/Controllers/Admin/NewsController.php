<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }

    public function profile()
    {
        return view('admin.profile.create');
    }
    
    public function profile_edit()
    {
        return view('admin.profile.edit');
    }
}
