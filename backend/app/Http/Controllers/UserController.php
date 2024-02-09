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

 public function postUser(Request $request){
    try {
        $validate_data = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::create($validate_data);
        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'User created successfully'
        ], 201);


    } catch (\Exception $e) {
        return response()->json([
            'success'=> false,
            'message' => 'Failed to create a user'. $e->getMessage() 
        ], 501);
    }
 }

}
