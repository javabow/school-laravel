<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blog;

class BlogController extends Controller
{
    
	public function index(){

		$id = 1;
		$post = Blog::find($id);
		print_r($post);
		echo $post->meta->link; // OR
		echo $post->fields->link;
		echo $post->link;

		return view('try');

	}

}
