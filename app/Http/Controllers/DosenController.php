<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
	public function index(){
		return view('pelajaran_controller');
	}


	public function passing_data_controller_ke_view(){
		$my_data='Hasna Gagah';
		return view('passing_data_controller_ke_view',['my_data'=>$my_data]);
		/*php array variable $my_array=['key1'=>'value1', 'key2'=>'value2', ..]*/
	}


	public function get_uri_data($uri_data){
		return view('uri_data',['uri_data'=>$uri_data]);
	}


	public function formulir(){
		return view('formulir');
	}


	public function formulir_proses(Request $request){
		$nama=$request->nama;
		return view('formulir_proses',['nama'=>$nama]);
	}
}
