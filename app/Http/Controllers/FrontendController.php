<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Safe 2 Report Anonymously';
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));

        return view('home', compact('states', 'pageTitle'));
    }
}
