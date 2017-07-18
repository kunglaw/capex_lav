<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vue_ctrl extends Controller
{
    //
	
	function __construct()
	{
		
	}
	
	function intro()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Vue";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Intro";
		$dt_tmpl["content"] 	 = "vue/content/intro";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "Vue Intro";
		$content["description"] = " this is vue intro ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "vue/template";
		
		return view ("vue/index",$data);
	}
	
	function computed_properties()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Vue";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Intro";
		$dt_tmpl["content"] 	 = "vue/content/computed_properties";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "Vue Computed Properties";
		$content["description"] = " this is computed properties ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "vue/template";
		
		return view ("vue/index",$data);
	}
	
	function conditional_loop()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Vue";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Intro";
		$dt_tmpl["content"] 	 = "vue/content/conditional_loop";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "Vue Conditional loop";
		$content["description"] = " ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "vue/template";
		
		return view ("vue/index",$data);
	}
	
	function list_method()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Vue";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Intro";
		$dt_tmpl["content"] 	 = "vue/content/list_method";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "Vue List Method";
		$content["description"] = " ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "vue/template";
		
		return view ("vue/index",$data);
	}
}
