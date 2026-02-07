<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all users
        $users = User::all();

        // Pass users to the admin dashboard view
        return view('admin.dashboard', compact('users'));
    }

    // Optional: view single user details
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user-details', compact('user'));
    }
}
