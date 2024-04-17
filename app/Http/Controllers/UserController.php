<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);
        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('profile');
        }
        return back()->withErrors([
            'email' => 'Введены неправильные данные'
        ]);
    }

    public function logout()
    {
        Auth::Logout();
        return redirect()->route('home');
    }

    public function profile()
    {
        return view('profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'email|required|unique:users',
            'image' => 'file|mimes:jpeg,jpg,png,webp',
            'password' => 'required|min:8',
            'password_repeat' => 'required'
        ]);

        if ($request->password != $request->password_repeat) {
            return back()->with('error', 'Пароли не совпадают.');
        }

        $file = $request->file('image');

        Storage::disk('public')->putFileAs($file, $file->getClientOriginalName());

        User::create([
            'image' => 'uploads/' . $file->getClientOriginalName(),
            'password' => Hash::make($request->password),
        ] + $request->all());
        
        return back()->with('success', 'Вы успешно зарегистрировались');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
