<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);

    }

    public function create()
    {
        return view('categories.create');
    }

    public function index()
    {
        // DB::connection()->enableQueryLog();
        $categories = Category::where([])->orderBy('order', 'asc')->get();

        foreach ($categories as $key => $category) {
            $articles[$categories[$key]->cname] = $category->hasManyArticles()->orderBy('order', 'asc')->get();
        }

        return view('categories.index', compact('articles', 'categories'));
    }



    public function store(Request $request)
    {


        $this->validate($request, [
            'cname' => 'required|unique:categories|max:50',
        ]);

        $category = new Category;
        $category->cname = $request->cname;
        $category->save();
        session()->flash('success', '添加完成');

        return redirect()->route('categories.create');
    }

    // public function edit(User $user)
    // {
    //     $this->authorize('update', compact($user));
    //     return view('users.edit', compact('user'));
    // }

    // public function update(User $user, Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|max:50',
    //         'password' => 'nullable|confirmed|min:6'
    //     ]);

    //     $this->authorize('update', $user);

    //     $data = [];
    //     $data['name'] = $request->name;
    //     if ($request->password) {
    //         $data['password'] = bcrypt($request->password);
    //     }
    //     $user->update($data);

    //     session()->flash('success', '个人资料更新成功！');

    //     return redirect()->route('users.show', $user->id);
    // }


    // public function destroy()
    // {
    //     Auth::logout();
    //     session()->flash('success', '您已成功退出！');
    //     return redirect('login');
    // }


}
