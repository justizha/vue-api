<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData()
{
    try {
        // Fetch data from the database (for example)
        $items = User::all(); // Assuming 'User' is your model

        // Return data as JSON response
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

}
