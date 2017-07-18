<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;
use App\Seaman_model;// load model

class Angular extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	function __construct()
	{
		
		
	}	 	
	 
	
	public function index()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Angular Page";
		$dt_tmpl["content"] 	 = "Angular/content";
		//content
		$content["description"] = " This is Description about this content ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		return view ("Angular/index",$data);
	}
	
	function intro()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "Intro";
		$dt_tmpl["content"] 	 = "Angular/content/intro";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "Angular Intro";
		$content["description"] = " this is angular intro ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		return view ("Angular/index",$data);
		
	}
	
	function application()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "AngularJS Application";
		$dt_tmpl["content"] 	 = "Angular/content/application";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "AngularJS Application";
		$content["description"] = " ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		return view ("Angular/index",$data);
		
	}
	
	function module()
	{
		
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "AngularJS Module";
		$dt_tmpl["content"] 	 = "Angular/content/module";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "AngularJS Module";
		$content["description"] = " ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		return view ("Angular/index",$data);
	}
	
	function bootstrap()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "AngularJS Integration with bootstrap";
		$dt_tmpl["content"] 	 = "Angular/content/bootstrap";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "AngularJS Integration with bootstrap";
		$content["description"] = " ";
		$dt_tmpl["dt_content"]   = $content;
		
		$data["dt_tmpl"] = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		return view ("Angular/index",$data);
		
	}
	
	function directive()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "AngularJS Directive ";
		$dt_tmpl["content"] 	 = "Angular/content/directive";
		
		//content -> mengirim nilai ke content
		$content["header_content"]= "AngularJS Directive ";
		$content["description"]   = " ";
		$dt_tmpl["dt_content"]    = $content;
		
		$data["dt_tmpl"]  = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		//print_r($data);
		
		return view ("Angular/index",$data);
		
	}
	
	function table()
	{
		// index
		$data["dt_head"] 		= array();
		$data["dt_js_under"]	= array();
		
		$data["dt_head"]["title"] = "Angular";
		//$data["dt_content"]["title"] = "this is content";
		
		// khusus untuk halaman template
		$dt_tmpl["header_title"] = "AngularJS Table ";
		$dt_tmpl["content"] 	 = "Angular/content/table";
		
		//content -> mengirim nilai ke content
		//$pelautObj = new Seaman_model();
		$content["header_content"]= "AngularJS Table ";
		$content["description"]   = " yahh pokoknya dari database lah";
		
		// ini kalau array biasa 
		//$content["pelaut"]		  = $pelautObj->get_list_seaman();
		
		$dt_tmpl["dt_content"]    = $content;
		
		$data["dt_tmpl"]  = $dt_tmpl;
		
		$data["template"] = "Angular/template";
		
		//print_r($data);
		
		return view ("Angular/index",$data);
		
	}
	
	function test()
	{
		
		//$pelautObj = new Seaman_model();
		//$data = $pelautObj->get_list_seaman();
		
		//echo json_encode($data);
		
		echo url("");
		
		// Store a piece of data in the session...
		//session(['key' => 'value']);
		//session(["babi" => 'bangsat']);
		
		//$arr_sess = array("nama"=>"aries dimas yudhistira","email"=>"alhusna901@gmail.com");
		//session($arr_sess);
		// storing data
		//$request->session()->put('anjing', 'itu elo');
		
		// delete 
		//$request->session()->forget('key');
		// delete all item
		//$request->session()->flush();
		
		 // Retrieve a piece of data from the session...
		//$value = session('babi');
		
		//return $value;
		 //$data = $request->session()->all();
		 
		 //print_r($data);
		 
		 //return $value = $request->session()->get('babi');
	}
	
	function test_session()
	{
		 // regenerate data session yang sudah terhapus
		 //session()->regenerate();
		echo "<h2> Halaman Test Session </h2><hr>";
		 
		 $data = session()->all();
		 
		 print_r($data);
		
	}
	
	
	
	/**
	
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
