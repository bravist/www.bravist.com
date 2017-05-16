<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Index action.
     *
     * @return void
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}
