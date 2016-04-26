<?php namespace App\Http\Controllers\front;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return \View::make('front/index');
	}
	
	public function getAbout()
	{
		return \View::make('front/about/index');
	}
	
	public function getService()
	{
		return \View::make('front/service/index');
	}

}
