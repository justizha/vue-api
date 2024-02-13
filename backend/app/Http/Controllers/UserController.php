<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(){
    try {
        $items = User::all(); 
        return response()->json([
            'success' => true,
            'data' => $items,
        ]);
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json([
            'success' => false,
            'message' => 'Failed to fetch data: ' . $e->getMessage(),
        ], 500);
    }
 }

 public function createUser(Request $request){
    try {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $user = User::create($validatedData);

        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'User created successfully'
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to create user: ' . $e->getMessage(),
        ], 500);
    }
}

}
