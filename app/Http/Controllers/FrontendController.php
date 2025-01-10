<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Safe 2 Report Anonymously';
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));
        $extras = json_decode(file_get_contents(public_path('backend/assets/partials/extra-options.json')));

        return view('home', compact('extras', 'states', 'pageTitle'));
    }

    /**
     * Search the specified resource in storage.
     */
    public function ajaxSchoolSearch(Request $request)
    {
        if ($request->ajax()) {
            $schools = DB::table('schools')->where('address->lga', 'LIKE', '%' .$request->lga. '%')->get();

            return Response($schools);
        }
    }
}
