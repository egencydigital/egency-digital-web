<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function createBlog(Request $request, $id = null){
        $validated = $request->validate([
            'title' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image' => $id
                    ? 'nullable|image|mimes:jpeg,png,jpg|max:2048'
                    : 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'type' => 'nullable|string',
            'author' => 'nullable|string',
        ]);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('blog', 'public');
            $validated['image'] = $path;
        }

        if($id){
            $blogs = BlogModel::findOrFail($id);
            $blogs->update($validated);
            $message = 'Blog Updated Successfully';
        }else{
            $validated['user_id'] = Auth::id();
            $blogs = BlogModel::create($validated);
            $message = 'Blog added Successfully !';
        }

        if($request->ajax()){
            return response()->json([
                'success' => true,
                'message' => $message,
                'blog' => $blogs
            ]);
        }

        return redirect('/blog')->with('success', $message);
    }

    public function blogPage(){
        $blog = BlogModel::all();
        return view('backend.blog.blog', compact('blog'));
    }

    public function blogFormPage($id = null){
        $blog = null;
        if($id){
            $blog = BlogModel::findOrFail($id);
        }
        return view('backend.blog.addBlog', compact('blog'));
    }

    public function blogDelete(Request $request, $id){
        if($id){
            $blog = BlogModel::findOrFail($id);
            $blog->delete();

        }
        return response()->json([
            'success' => true,
            'message' => 'Team member deleted successfully!',
        ]);
    }

}
