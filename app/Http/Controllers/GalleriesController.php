<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GalleryRequest;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Category;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	} 
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
		
	return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
		
	return view('galleries.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        Gallery::create($request->all());
		
	return redirect('admin/galleries')->with('flash_message', 'Gallery has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
		
	return view('galleries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
		
	$categories = Category::pluck('title', 'id');
		
	return view('galleries.edit', compact('gallery', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
		
	$gallery->update($request->all());
		
	return redirect('admin/galleries')->with('flash_message', 'Gallery has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
		
	$gallery->delete();

	return redirect('admin/galleries')->with('flash_message', 'Gallery has been deleted!');
    }
}
