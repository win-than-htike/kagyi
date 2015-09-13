<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function home()
	{
		$posts = ['He','Nic','Dona','Yo'];
		return view('home',compact('posts'));
	}
	public function about($name)
	{
		return view('about', compact('name'));//check compact
    }
    public function contant()
    {
    	return view('contant');
    }


}
