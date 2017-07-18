<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class Opex extends Controller
{
    //
	function create()
	{

		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Opex Create";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Opex Create";
		$dt_tmpl["content"] 	 = "Opex/content";
		//content
		$content["description"] = " This is Description about this content ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Opex/template";
		
		return view ("Opex/index",$data);
	
	}
	
	function view_session()
	{
		
		//print_r(Auth::user());
		
		//echo Auth::user()->password;
	}
}
