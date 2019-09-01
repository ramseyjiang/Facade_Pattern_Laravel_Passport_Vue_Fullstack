<?php

namespace Fspafs\Http\Controllers;

use Fspafs\Http\Requests\BlogRequest;
use Auth;
use BlogRepository;

class BlogController extends Controller
{
    /**
     * BuilderController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth'])->except('index', 'show', 'create', 'edit');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BlogRepository::getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        return response()->json(BlogRepository::createBlog($request->all(), Auth::user()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $blogId
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, string $blogId)
    {
        $blog = BlogRepository::getOne($blogId);

        // check if the authenticated user can match the task. The second param must be an object.
        // After add policy, it must be registered in he AuthServiceProvider.php
        $this->authorize('match', $blog);
        BlogRepository::updateBlog($request->all(), $blog);

        return response()->json(BlogRepository::getOne($blogId));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $blogId
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $blogId)
    {
        $blog = BlogRepository::getOne($blogId);

        // check if the authenticated user can match the blog. The second param must be an object.
        $this->authorize('match', $blog);  
        $blog->delete();

        return response()->json(BlogRepository::getAll());
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $blogId
     * @return \Illuminate\Http\Response
     */
    public function show(string $blogId)
    {
        return response()->json(BlogRepository::getOne($blogId));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
