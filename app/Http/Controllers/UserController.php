<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Fitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  /**
   * Display a listing of the users
   *
   * @param  \App\Models\User  $model
   * @return \Illuminate\View\View
   */

  // public function index(User $model)
  // {
  //     return view('users.index', ['users' => $model->paginate(15)]);

  // }

  public function index()
  {
    $data = [
      'users' => User::all(),
      'fiturs' => Fitur::all(),
    ];
    return view('users.index', $data);
  }

  public function create()
  {
    return view('users.create');
  }

  public function store(Request $request)
  {


    // $matkul = MataKuliah::find($request->matakuliah);
    // $dosen = $matkul->dosen->name;

    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'role'  => ['required']
    ]);

    $create = User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'email_verified_at' => now(),
      'password' => Hash::make($request['password']),
      'role'  => $request['role']
    ]);



    return redirect()->route('user.index');
  }

  public function show($id)
  {
    //
  }

  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('user.index');
  }
}
