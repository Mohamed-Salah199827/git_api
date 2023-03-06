<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function store(Request $request)
    {
        dd($request);
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->name,
        //     'Password' => $request->name,
        // ]);
        // return response()->json()
    }
}
