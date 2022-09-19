<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BasicUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicuser = User::where('role', 'user')->paginate('10');
        return view('admin.basicuser.index',[
            'title' => 'User Table',
            'basicuser' => $basicuser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.basicuser.view',[
            'title' => 'Create User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $basicuser)
    {
        $validated = $request->validate([
            'name' => ['required','max:30'],
            'email' => ['required','email','max:255','unique:users'],
            'alamat' => ['required','max:100'],
            'telepon' => ['required','max:13'],
            'password' => ['required','min:8'],
        ]);

        $store = $request->all();
        $store['password'] = Hash::make($request->password);
        $basicuser->create($store);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $basicuser)
    {
        return view('admin.basicuser.view',[
            'title' => 'Detail User',
            'basicuser' => $basicuser,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $basicuser)
    {
        return view('admin.basicuser.edit',[
            'title' => 'Edit User',
            'basicuser' => $basicuser
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $basicuser)
    {
        $validated = $request->validate([
            'name' => ['required','max:30'],
            'email' => ['required','email','max:255'],
            'alamat' => ['required','max:100'],
            'role' => ['required'],
            'telepon' => ['required','max:13'],
            'password' => ['required','min:8'],
        ]);

        $update = $request->all();

        if ($request->filled('password')) {
            $update['password'] = Hash::make($request->password);
        }

        $basicuser->update($update);

        return redirect()->route('basicuser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $basicuser)
    {

        $basicuser->delete();

        return redirect()->route('basicuser.index');
    }
}
