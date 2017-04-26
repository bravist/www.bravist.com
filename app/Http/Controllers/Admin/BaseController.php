<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
	/**
	 * Get a manager
	 * @return Manager
	 */
    public function getManager()
    {
    	return Auth::guard('manager')->user();
    }
}
