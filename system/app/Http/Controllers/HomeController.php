<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Banner;
use App\Dog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('home')->with('banner', $banners);
    }

    public function talent()
    {
        $dogs = Dog::all();
        return view('talents.index')->with('dog', $dogs);
    }

    public function contact()
    {
        return view('contacts.index');
    }

    public function about()
    {
        $posts = Post::all();
        return view('abouts.index')->with('post', $posts);
    }
}
