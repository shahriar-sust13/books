<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    //

    function showBookList(){
    	return view('search-page');
    }

}
