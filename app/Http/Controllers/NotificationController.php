<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotificationController extends Controller
{
    //

	function showNotification(){
		return view('notification');
	}

}
