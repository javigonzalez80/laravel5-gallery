<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PhotoRequest;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Gallery;

use Illuminate\Http\Request;

class PhotosController extends Controller
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
        $photos = Photo::all();
		
		return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::pluck('title', 'id');
		
		return view('photos.create', compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
        $photo = new Photo;
		$photo->gallery_id = $request->get('gallery_id');
		$photo->title = $request->get('title');
		
		$image = $request->file('image');
		$destinationPath = public_path().'/img/uploads/';
		$filename = $image->getClientOriginalName();
		$request->file('image')->move($destinationPath, $filename);
		
		$photo->image = $filename;
		$photo->save();
		
		return redirect('admin/photos')->with('flash_message', 'Photo has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::findOrFail($id);
		
		return view('photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::findOrFail($id);
		
		$galleries = Gallery::pluck('title', 'id');
		
		return view('photos.edit', compact('photo', 'galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
		$photo->gallery_id = $request->get('gallery_id');
		$photo->title = $request->get('title');
		
		$image = $request->file('image');
		$destinationPath = public_path().'/img/uploads/';
		$filename = $image->getClientOriginalName();
		$request->file('image')->move($destinationPath, $filename);
		
		$photo->image = $filename;
		$photo->save();

		
		return redirect('admin/photos')->with('flash_message', 'Photo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
		
		$photo->delete();

		return redirect('admin/photos')->with('flash_message', 'Photo has been deleted!');
    }
}
