<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        return view('user_dashboard.dashboard');
        $req->session()->flash('alert-success', 'Welcome to Dashboard');
    }
}
