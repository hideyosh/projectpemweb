<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
// use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role', 'admin')->paginate(10);
        return view('admin.user.index', [
            'users' => $user,
            'title' => 'Admin Table',

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create', [
            'title' => 'Create Admin',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
         $request->validate([
            'name' => ['required','max:30'],
            'email' => ['required','email','max:255','unique:users'],
            'alamat' => ['required','max:100'],
            'role' => ['required'],
            'telepon' => ['required','max:13'],
            'password' => ['required','min:8'],
        ]);

        $store = $request->all();
        $store['password'] = Hash::make($request->password);
        $user->create($store);

        return redirect()->route('user.index')->withToastSuccess('Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.view', [
            'user' => $user,
            'title' => 'Detail Admin',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user,
            'title' => 'Edit Admin'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
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

        $user->update($update);

        return redirect()->route('user.index')->withToastSuccess('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withToastSuccess('Deleted Successfully!');
    }
}
