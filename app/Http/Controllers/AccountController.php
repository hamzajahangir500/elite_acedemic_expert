<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index() : View {
        $user = User::find(auth()->user()->id);
        return view('home.pages.my_account', compact('user'));
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'avatar' => ['sometimes', 'image', 'max:2048']
        ]);
        
        $user = User::findOrFail(auth()->id());
        
        // Update only the fields present in the request
        if ($request->has('name')) {
            $user->name = $validated['name'];
        }
        if ($request->has('email')) {
            $user->email = $validated['email'];
        }
        if ($request->has('password') && $request->password != null) {
            $user->password = Hash::make($validated['password']);
        }
        if ($request->hasFile('avatar')) {
            $user->image = fileUpload($request->file('avatar'), 'users');
        }
        
        $user->save();
        
        return redirect()->route('user.account')->with('success', __('User updated successfully'));
        
    }

    public function profile() : View {
        $user = User::find(auth()->user()->id);
        return view('admin.pages.user_profile.index', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:users,email,' . auth()->id(),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Update name
        $user->name = $request->name;

        // Update email (if not disabled in form)
        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $user->image = fileUpload($request->file('image'), 'users');
        }

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile.get')->with('success', 'Profile updated successfully!');
    }

    public function storeCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if it's an update
        if ($request->id) {
            $user = User::findOrFail($request->id);

            // Handle image
            $imageName = $user->image;
            if ($request->hasFile('image')) {
                // Remove old image
                if ($imageName && Storage::disk('public')->exists('users/' . $imageName)) {
                    Storage::disk('public')->delete('users/' . $imageName);
                }
                $imageName = fileUpload($request->file('image'), 'users');
            }

            // Update user
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $imageName,
            ]);

            return redirect()->route('admin.users.get')->with('success', 'Customer updated successfully.');
        }

        // If no ID, then create
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->hasFile('image') ? fileUpload($request->file('image'), 'users') : null,
            'password' => Hash::make('user1234'),
        ]);

        $user->assignRole('customer');

        return redirect()->route('admin.users.get')->with('success', 'Customer added successfully.');
    }
    public function editCustomer(User $customer)
    {
        $customers = User::role('customer')->get();
        return view('admin.pages.users.index', compact('customer', 'customers'));
    }

}