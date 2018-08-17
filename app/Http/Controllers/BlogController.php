<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
      //insert biasa
      //$blog = new Blog;
      //$blog->title='insert blog baru';
      //$blog->description='insert desc baru';
      //blog->save();
      //
      //insert mass assignment
      //Blog::create([
      //'title'       =>'title mass asgn',
      //'description  =>'desc mass asgn',
      //]);

      //update
      //$blog =Blog::where('title','mond')->first();
      //$blog->title = 'monddd';
      //$blog->save();

      //update mass assignment
      //Blog::find(9)->update([
      //    'title'       =>'title ku',
      //    'description' =>'haloo haloow'
      //])

      //delete
      //$blog=Blog::find(1);
      //$$blog->delete();
      //
      //destroy
      //$blog::destroy(8);
      $blogs = Blog::paginate(10);
      //$blogs = DB::table('blogs')->paginate(10);
      return view('blog.blog',['blogs'=>$blogs]);
    }

    public function show($id)
    {
      $user= DB::table('users')->get();
      $blog= DB::table('blogs')->get();
      // $user= DB::findOrFail(1);
      // $user= DB::table('users')->where('username','like','djarwo')->get();
      // DB::table('users')->insert(['username'=>'hilman','password'=>1233]);
      DB::table('users')->where('username','djarwo')->update(['username'=>'djarwoooo','password'=>1111]);
      $unescape ='<script>alert("XL")</script>';
      return view('blog/single',['id'=>$id,'user'=>$user,'unescape'=>$unescape,'blogs'=>$blog]);
    }

    public function create()
    {
      return view('blog.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
          'title'       =>'required|min:5',
          'description' =>'required|min:5|max:50',
      ]);
      $blog = new Blog;
      $blog->title      = $request->title;
      $blog->description= $request->description;
      $blog->save();
      return redirect('blog')->with('message','Blog updated');
    }

    public function edit($id)
    {
      $blog = Blog::find($id);
      if(!$blog)
       return 'ERROR';

      return view('blog.edit',['blog'=>$blog]);
    }

    public function update(Request $request,$id)
    {
      $blog               = Blog::find($id);
      $blog->title        = $request->title;
      $blog->description  = $request->description;
      $blog->save();
      return redirect('blog/'.$id)->with('message','Blog updated');
    }

    public function delete($id)
    {
      $blog = Blog::find($id);
      $blog->delete();
      return redirect('blog');
    }
}
