<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // return $request->all();
        $user = User::findOrFail($request->user_id);
        return response()->json($user);
    }
}
