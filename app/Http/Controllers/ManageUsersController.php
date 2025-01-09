<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = __('School Managers');
        $users = $this->userSearchData();
        return view('admin.schoolmanagers.index', compact('pageTitle', 'users'));
    }

    /**
     * Display active listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activeUsers()
    {
        $pageTitle = __('Active Members');
        $users = $this->userSearchData('activeUsers');
        return view('admin.schoolmanagers.index', compact('users', 'pageTitle'));
    }

    /**
     * Display active listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendingUsers()
    {
        $pageTitle = __('Pending Members');
        $users = $this->userSearchData('pendingUsers');
        return view('admin.schoolmanagers.index', compact('users', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = __('Create School Owner');

        return view('admin.schoolmanagers.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'              => 'string|required|max:255',
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password'          => ['required', 'confirmed', Rules\Password::defaults()],
            'status'            => 'boolean|required',
            'username'          => ['required', 'string', 'max:255', 'unique:' . User::class],
            'phone'             => 'string|nullable|max:100',
            'about'             => 'string|nullable',
            'roles'             => 'string|required',
            'profile_picture'   => 'image|mimes:jpg,jpeg,gif,svg,webp,png|max:10000|nullable',
        ]);

        $thumb = '';
        if($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $thumb = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/users/'), $thumb);
        }

        $user                       = new User();
        $user->name                 = $request->input('name');
        $user->email                = $request->input('email');
        $user->username             = $request->input('username');
        $user->status               = $request->input('status');
        $user->phone                = $request->input('phone');
        $user->about                = $request->input('about');
        $user->roles                = $request->input('roles');
        $user->profile_picture      = $thumb;
        $user->email_verified_at    = date('Y-m-d H:i:s', strtotime($request->email_verified_at));
        $user->password             = Hash::make($request->input('password'));

        $user->save($validate);
        flash('School Manager was successfully created', 'success');

        return redirect()->route('schoolmanagers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User:: find($id);
        $pageTitle = $user->name;

        return view('admin.schoolmanagers.view', compact('user', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User:: find($id);
        $pageTitle = __('Edit ') . $user->name;

        return view('admin.schoolmanagers.edit', compact('user', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name'              => 'string|required|max:255',
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password'          => ['required', 'confirmed', Rules\Password::defaults()],
            'status'            => 'boolean|required',
            'username'          => ['required', 'string', 'max:255', 'unique:' . User::class],
            'phone'             => 'string|nullable|max:100',
            'about'             => 'string|nullable',
            'roles'             => 'string|required',
            'profile_picture'   => 'image|mimes:jpg,jpeg,gif,svg,webp,png|max:10000|nullable',
        ]);

        $user                       = User::find($id);

        $email_verified_at = $user->email_verified_at;
        if ($request->input('email_verified_at') && $user->email_verified_at == null) {
            $email_verified_at = Carbon::now();
        }

        $thumb = $user->profile_picture;
        if($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $thumb = time() . $file->getClientOriginalName();
            $file->move(storage_path(path: 'app/public/media/users/'), $thumb);
        }

        $user->name                 = $request->input('name');
        $user->email                = $request->input('email');
        $user->username             = $request->input('username');
        $user->status               = $request->input('status');
        $user->phone                = $request->input('phone');
        $user->about                = $request->input('about');
        $user->roles                = $request->input('roles');
        $user->profile_picture      = $thumb;
        $user->email_verified_at    = $email_verified_at;
        if ($request->input('password')) {
            $user->password             = Hash::make($request->input('password'));
        }

        $user->update($validate);
        flash('School Manager was successfully updated', 'success');

        return redirect()->route('schoolmanagers.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Search the specified resource in storage.
     */
    protected function userSearchData($scope = null)
    {
        if($scope) {
            $users = User::$scope();
        } else {
            $users = User::query()->where('roles', 'educator');
        }

        $request = request();

        if($request->search) {
            $users->searchable(['name', 'username', 'email', 'phone', 'schools:id,name']);
        }

        return $users->orderBy('id', 'DESC')->paginate(10);
    }
}
