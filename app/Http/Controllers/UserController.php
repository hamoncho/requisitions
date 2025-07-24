<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('supervisor')->get();
        $allUsers = User::all();
        return view('users.index', compact('users', 'allUsers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'position' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'supervisor_id' => 'nullable|exists:users,id',
        ]);

        $user->update($request->only('position', 'role', 'supervisor_id'));

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Reset the password of the specified resource in storage.
     */
    public function resetPassword(User $user)
    {
        $user->update(['password' => Hash::make('password')]);

        return redirect()->route('users.index')->with('success', 'User password reset successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}