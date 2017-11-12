<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
      return User::all();
    }
    public function show()
    {

    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
    }
}
