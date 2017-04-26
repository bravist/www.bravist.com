<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
    	$this->middleware('auth.admin');
    }

    /**
     * Index action
     * 
     * @return void
     */
    public function index()
    {
    	$manager = $this->getManager();

    	return view('admin.dashboard', compact('manager'));
    }
}
