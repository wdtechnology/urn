<?php

namespace App\Http\Controllers;

use App\Http\Requests\Vote;
use App\Urn;

class HomeController extends Controller
{
    public function index() {

    	return view('home');
    }


    public function vote(Vote $data) {

    	if ( date('h:i') < '08:40' )
    		$vote = '10 - João Silva';
   		else
   			$vote = $data->vote;
    	
    	Urn::create([
    		'vote' => $vote
    	]);    	
    }
}
