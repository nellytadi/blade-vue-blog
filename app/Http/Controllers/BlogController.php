<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::latest()->get();
        return view('welcome',compact('blogs'));
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
     *
     * @throws ValidationException
     */
    public function store(Request $request):string
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

        return redirect()->back()->with(["status"=>"Your blog post has been created successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $blog = Blog::find($id);
        return view('single',compact('blog'));
    }



}
