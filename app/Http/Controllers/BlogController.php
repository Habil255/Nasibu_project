<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Blogpost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.blog');
    }

    public function singlePost(Request $request)
    {
        //
        // Blogpost::create([
        //     'title'=>$request->title,
        //     'blog_description'=>$request->blog_description,
        //     $image=> $request->file('file'),
        // $imageName=>time().'.'.$image->extension(),
        // $image=>move(public_path('images'),$imageName),
        // $blog->image1=$imageName;

        // ]);

        $title=$request->title;
        $blog_description=$request->blog_description;
        $image= $request->file('file');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('blogs_contents'),$imageName);

        $blog=new Blogpost();
        $blog->title=$title;
        $blog->blog_description=$blog_description;
        $blog->image=$imageName;

        $blog->save();
        return back();  
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comments(Request $request)
    {
        //
         
    
        Comment::create([
           'name'=> $request->name,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'message'=>$request->message,
        ]); 
         
            return back();
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $posts=Blogpost::get();
        $data=Comment::limit(5)
                        ->get();
        return view('pages.blog',compact('data','posts'));
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComment()
    {
        //
        $data=Comment::get();
        return view('pages.dashcomments',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogPost()
    {
        //
        return view("pages.dashblogpost");
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}
