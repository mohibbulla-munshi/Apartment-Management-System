<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('user_dashboard.dashboard');
    }
}
