<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = __('All Schools');
        $schools = School::orderBy('name', 'DESC')->paginate(10);

        return view('admin.schools.list', compact('pageTitle', 'schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->schoool_created == 1 || $user->roles == 'admin') {
            return DashboardController::dashboard();
        }
        $pageTitle = 'Create School';
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));

        return view('myschool.create', compact('states', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createSchool()
    {
        $pageTitle = 'Create School';
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));
        $users = User::where('roles', 'educator')->where('status', 1)->orderBy('name', 'DESC')->get();

        return view('admin.schools.create', compact('states', 'pageTitle', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'string|required|max:125',
            'email'     => 'email|required|max:125',
            'phone'     => 'string|max:125',
            'about'     => 'string|nullable',
            'address'   => 'string|required',
            'state'     => 'string|required',
            'lga'       => 'string|required',
            'country'   => 'string|required',
            'image'     => 'image|mimes:jpg,jpeg,png,gif,svg,webp|max:10000|nullable'
        ]);

        $image = '';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/schools/'), $image);
        }

        $school = new School();
        $school->user_id    = Auth::user()->id;
        $school->name       = $request->name;
        $school->email      = $request->email;
        $school->phone      = $request->phone;
        $school->about      = $request->about;
        $school->address    = [
            'address'   => $request->address,
            'state'     => $request->state,
            'lga'       => $request->lga,
            'postal'    => $request->postal,
            'country'   => $request->country
        ];
        $school->image      = $image;

        $school->save($validated);

        $user = Auth::user();
        $user->schoool_created  = 1;
        $user->update();

        return redirect(route('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSchool(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'string|required|max:125',
            'email'     => 'email|required|max:125',
            'phone'     => 'string|max:125',
            'about'     => 'string|nullable',
            'address'   => 'string|required',
            'state'     => 'string|required',
            'lga'       => 'string|required',
            'country'   => 'string|required',
            'user_id'   => 'integer|required',
            'image'     => 'image|mimes:jpg,jpeg,png,gif,svg,webp|max:10000|nullable'
        ]);

        $image = '';
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/schools/'), $image);
        }

        $school = new School();
        $school->user_id    = $request->user_id;
        $school->name       = $request->name;
        $school->email      = $request->email;
        $school->phone      = $request->phone;
        $school->about      = $request->about;
        $school->address    = [
            'address'   => $request->address,
            'state'     => $request->state,
            'lga'       => $request->lga,
            'postal'    => $request->postal,
            'country'   => $request->country
        ];
        $school->image      = $image;

        $school->save($validated);

        $user = User::find($request->user_id);
        $user->schoool_created  = 1;
        $user->update();

        return redirect(route('schools.index'));
    }

    /**
     * Display the specified resource.
     */
    public function myschool() {
        $user = Auth::user()->id;
        $school = School::where('user_id', $user)->first();
        $pageTitle = 'View ' . $school->name;

        return view('myschool.index', compact('school', 'pageTitle'));
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $school = School::find($id);
        $pageTitle = 'View ' . $school->name;

        return view('admin.schools.view', compact('school', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $school = School::find($id);
        $users = User::where('roles', 'educator')->orderBy('name', 'DESC')->get();
        $pageTitle = __('Edit ') . $school->name;
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));

        return view('admin.schools.edit', compact('school', 'users', 'pageTitle', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validated = $request->validate([
            'name'      => 'string|required|max:125',
            'email'     => 'email|required|max:125',
            'phone'     => 'string|max:125',
            'about'     => 'string|nullable',
            'address'   => 'string|required',
            'state'     => 'string|required',
            'lga'       => 'string|required',
            'country'   => 'string|required',
            'user_id'   => 'integer|required',
            'image'     => 'image|mimes:jpg,jpeg,png,gif,svg,webp|max:10000|nullable'
        ]);

        $school = School::find($id);

        $image = $school->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/schools/'), $image);
        }

        $school->user_id    = $request->user_id;
        $school->name       = $request->name;
        $school->email      = $request->email;
        $school->phone      = $request->phone;
        $school->about      = $request->about;
        $school->address    = [
            'address'   => $request->address,
            'state'     => $request->state,
            'lga'       => $request->lga,
            'postal'    => $request->postal,
            'country'   => $request->country
        ];
        $school->image      = $image;

        $school->update($validated);

        $user = User::find($request->user_id);
        $user->schoool_created  = 1;
        $user->update();

        return redirect(route('schools.show', $id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editSchool()
    {
        $user = Auth::user()->id;
        $school = School::where('user_id', $user)->first();
        $pageTitle = __('Edit ') . $school->name;
        $states = json_decode(file_get_contents(public_path('backend/assets/partials/nigeria-states-lga.json')));

        return view('myschool.edit', compact('school', 'pageTitle', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateSchool(Request $request, String $id)
    {
        $validated = $request->validate([
            'name'      => 'string|required|max:125',
            'email'     => 'email|required|max:125',
            'phone'     => 'string|max:125',
            'about'     => 'string|nullable',
            'address'   => 'string|required',
            'state'     => 'string|required',
            'lga'       => 'string|required',
            'country'   => 'string|required',
            'user_id'   => 'integer|required',
            'image'     => 'image|mimes:jpg,jpeg,png,gif,svg,webp|max:10000|nullable'
        ]);

        $school = School::find($id);

        $image = $school->image;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/schools/'), $image);
        }

        $school->user_id    = Auth::user()->id;
        $school->name       = $request->name;
        $school->email      = $request->email;
        $school->phone      = $request->phone;
        $school->about      = $request->about;
        $school->address    = [
            'address'   => $request->address,
            'state'     => $request->state,
            'lga'       => $request->lga,
            'postal'    => $request->postal,
            'country'   => $request->country
        ];
        $school->image      = $image;

        $school->update($validated);

        return redirect()->route('myschool.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $school = School::find($id);

        $user = User::find($school->user_id);
        $user->schoool_created  = 0;
        $user->update();
        
        $school->delete();

        flash('School successfully deleted', 'success');

        return redirect()->route('schools.index');
    }
}
