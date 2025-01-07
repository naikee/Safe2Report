<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public static function dashboard(): View
    {
        $pageTitle = 'Dashboard';

        return view('dashboard', compact('pageTitle'));
    }
}
