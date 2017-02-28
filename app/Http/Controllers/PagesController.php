<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Photo;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display Homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        return view('pages.homepage');
    }
	
	/**
     * Display Gallerypage.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        $categories = Category::paginate(10);
		
	return view('pages.gallery', compact('categories'));
    }
	
	/**
     * Display Categorypage.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
		
	$galleries = Gallery::paginate(10);
		
	return view('pages.category', compact('category', 'galleries'));
    }
	
	/**
     * Display Albumpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function album($category_slug, $gallery_slug)
    {
	$category = Category::where('slug', $category_slug)->first();
		
	$gallery = Gallery::where('slug', $gallery_slug)->first();
		
	return view('pages.album', compact('category', 'gallery'));
    }
	
	/**
	 * Display Errorpage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	Public function error()
	{
		return view('errors.error');
	}

}
