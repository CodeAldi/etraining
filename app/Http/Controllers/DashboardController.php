<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() : View {
        // dd(Auth::user()->isAdmin());
        return view('dashboardPage.index');
    }
}
