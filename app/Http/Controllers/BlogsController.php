<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\User;
use App\Mail\BlogPublished;
use Illuminate\Support\Facades\Mail;
use Session;

class BlogsController extends Controller
{
    public function __construct(){
        $this->middleware('author', ['only' => ['create', 'edit', 'store', 'update']]);
        $this->middleware('admin', ['only' => ['delete', 'trash', 'restore', 'permanentDelete']]);
    }

    //
    public function index(){
        $blogs = Blog::where('status', 1)->latest()->paginate(1);
        // $blogs=Blog::latest()->paginate(5);
        // $blogs=Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        $categories = Category::latest()->get();
        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request){
        $rules = [
            'title' => ['required', 'min:20', 'max:160'],
            'body' => ['required', 'min:200'],
        ];
        
        $this->validate($request, $rules);

        $input = $request->all();
        $input['slug'] = str_slug($request->title);
        $input['meta_title'] = str_limit($request->title, 55);
        $input['meta_description'] = str_limit($request->body, 155);
        //image upload
        if($file = $request->file('featured_image')){
            $name = uniqid().$file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('images/featured_image', $name);
            $input['featured_image'] = $name;
        }

        //$blog = Blog::create($input);
        $blogByUser = $request->user()->blogs()->create($input);
        //sync with categories
        if($request->category_id){
            $blogByUser->category()->sync($request->category_id);
        }
        
        //mail

        $users = User::all();
        foreach($users as $user) {
            Mail::to($user->email)->queue(new BlogPublished($blogByUser, $user));
        }

        Session::flash('blog_created_message', 'Congratulations on creating a great blog post!');

        return redirect('/blogs');
    }

    public function show($slug){
        //$blog = Blog::findOrFail($slug);
        $blog = Blog::whereSlug($slug)->first();
        return view('blogs.show', compact('blog'));
    }

    public function edit($id){
        $categories = Category::latest()->get();
        $blog = Blog::findOrFail($id);
        $blogCategories = array();
        foreach($blog->category as $category){
            $blogCategories[] = $category->id -1;
        }

        $filtered = array_except($categories, $blogCategories);

        return view('blogs.edit', ['blog' => $blog, 'categories' => $categories, 'filtered' => $filtered]);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $blog = Blog::findOrFail($id);

        if($file = $request->file('featured_image')){
            if($blog->featured_image){
                unlink('images/featured_image/.$blog->featured_image');
            }
            $name = uniqid().$file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('images/featured_image', $name);
            $input['featured_image'] = $name;
        }

        $blog->update($input);
        //sync with categories
        if($request->category_id){
            $blog->category()->sync($request->category_id);
        }
        Session::flash('blog_created_message', 'Blog update successful!');
        return view('blogs.show', compact('blog'));
        // return redirect('blogs');
    }

    public function delete(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('blogs');
    }

    public function trash(){
        $trashedBlogs = Blog::onlyTrashed()->get();
        return view('blogs.trash', compact('trashedBlogs'));
    }

    public function restore($id){
        $restoredBlog = Blog::onlyTrashed()->findOrFail($id);
        $restoredBlog->restore($restoredBlog);
        return redirect('blogs');
    }

    public function permanentDelete($id){
        $permanentDeleteBlog = Blog::onlyTrashed()->findOrFail($id);
        $permanentDeleteBlog->forceDelete($permanentDeleteBlog);
        return back();
    }
}
