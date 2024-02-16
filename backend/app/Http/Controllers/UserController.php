<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(){
        try {
            $items = User::all(); 
            return response()->json($items);
            
        } 
        catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch data: ' . $e->getMessage(),
            ], 500);
        }
    }
    
    public function showUser($id){
        try {
            $item = User::find($id); 
            return response()->json($item,200);
        }
        catch (\Exception $e) {
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

    public function deleteUser($id){
        $user = User::find($id);
        if(!$user){
            return response()->json(404);
        }
        $user->delete();
        return response()->json(200);
    }

}
