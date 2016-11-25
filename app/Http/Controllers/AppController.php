<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class AppController extends Controller
{
    public function index() {    
      return View::make('app.index');
    }

    public function curl()
    {
    	$curl = new \Curl\Curl();
    	$curl->setopt(CURLOPT_SSL_VERIFYPEER, FALSE);
    	$curl->get('http://food2fork.com/api/search',[
    		'key'=>'b27b17e13e4a0645e627a63f0468374e']);
    	return $curl->response;
    }

    public function curlDetail($id)
    {
    	$curl = new \Curl\Curl();
    	$curl->setopt(CURLOPT_SSL_VERIFYPEER, FALSE);
    	$curl->get('http://food2fork.com/api/get',[
    		'key'=>'b27b17e13e4a0645e627a63f0468374e',
    		'rId'=>$id]);
    	return $curl->response;
    }

    public function details($id) {
    	return View::make('app.details',['id'=>$id]);
    }

}
