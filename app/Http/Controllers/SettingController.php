<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role !== 0) {
            return redirect()->back()->withErrors("没有权限")->withInput();
        } else {
            return view("setting.show");
        }

    }

    public function addArticle()
    {
        if (Auth::user()->role !== 0) {
            return redirect()->back()->withErrors("没有权限")->withInput();
        } else {




            return view("setting.show",);
        }

    }
}
