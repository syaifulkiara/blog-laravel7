<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use App\Tags;
use App\User;
class BlogController extends Controller
{
    public function index(Posts $posts){
       
    	$category_widget = Category::all();
        $tag = Tags::all();
    	$data = $posts->latest()->take(4)->get();
        $user = User::all();
    	return view('blog', compact('data','category_widget','tag','user'));
    }

    public function isi_blog($slug){
     
    	$category_widget = Category::all();
        $tag = Tags::all();
    	$data = Posts::where('slug', $slug)->get();
        $user = User::all();
    	return view('blog.isi_post', compact('data','category_widget','tag'));
    }

    public function list_blog(){
       
    	$category_widget = Category::all();
        $tag = Tags::all();
    	$data = Posts::latest()->paginate(4);
        $user = User::all();
    	return view('blog.list_blog',compact('data','category_widget','tag'));
    }

    public function list_category(Category $category){
        
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = $category->posts()->paginate(4);
        $user = User::all();
        return view('blog.list_blog',compact('data','category_widget','tag'));
    }

    public function cari(request $request){
       
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul','LIKE','%'.$request->cari.'%')->paginate(4);
        return view('blog.list_blog',compact('data','category_widget','tag'));
    }
}
