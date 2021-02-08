<?php

namespace App\Http\Controllers;
use App\Http\Resources\BlogCollection;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): BlogCollection
    {
        $blogs = Blog::latest()->get();

        return new BlogCollection($blogs);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title' => 'required',
           'blog' => 'required',
           'author' => 'required'
        ]);

        Blog::create([
           'title' => $request->input('title'),
           'blog' => $request->input('blog'),
           'author' => $request->input('author')
        ]);

//        return redirect()->back()->with(["status"=>"Your blog post has been created successfully"]);
        return response()->json(["status"=>"Your blog post has been created successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return BlogResource
     */
    public function show(int $id): BlogResource
    {
        $blog = Blog::find($id);
        return new BlogResource($blog);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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
