<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lipsum;

class IndexController extends Controller
{
	private $articlesCount = 5; //	articles count

    public function articlesList()
    {
    	//	immitation Model response
    	$articles = array();
    	for($i = 0; $i < $this->articlesCount; $i++)
    	{
    		$articles[$i] = [
    			'Id' => $i+1,
    			'Title' => Lipsum::short()->text(1)
    		];
    	}

    	return view('home')
    		->with([
    			'articles' => $articles,
    			'header' => 'Articles'
    		]);
    }

    public function articleShow($id)
    {
    	//	immitation Model response
    	$article = [
	    			'text' => Lipsum::html(3),
	    			'title' => Lipsum::short()->text(1)
    	];

    	return view('article')
    		->with([
    			'header' => 'Article ' . $id,
    			'article' => $article
    		]);
    }

    public function contactForm()
    {
    	return view('contact')
    		->with([
    			'header' => 'Contact Us'
    		]);
    }

    public function contactSend(Request $request)
    {
    	$this->validate($request, [
    			'name' => 'required|min:3',
    			'message' => 'required'
    	]);

    	$data = $request->all();
    	
    	return redirect('thank-you')
	    	->with([
	    		'name' => $data['name'],
	    	]);
    }

    public function thankYou()
    {
    	if (session('name') && null !== session('name'))
    	{
	    	return view('thank-you')
	    		->with([
	    			'header' => 'Thank you, ' . session('name') . '!'
	    		]);
    	}
    	
    	return redirect('home');
    }
}
