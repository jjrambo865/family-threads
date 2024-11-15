<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Family;
use App\Models\FamilyMembership;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'family_code' => 'nullable|string|exists:families,family_code', // Optional family code
        ]);

        if ($request->filled('family_code')) {
            // Register as a family member
            $family = Family::where('family_code', $request->family_code)->first();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'family_member',
                'family_id' => $family->id, // Link user to family
            ]);

            // Create membership record
            FamilyMembership::create([
                'family_id' => $family->id,
                'user_id' => $user->id,
                'role' => 'family_member',
                'join_date' => now(),
            ]);
        } else {
            // Register as a new family admin and create a new family
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'family_admin',
            ]);

            // Create a new family
            $family = Family::create([
                'family_name' => "{$request->name}'s Family",
                'admin_user_id' => $user->id,
                'family_code' => strtoupper(Str::random(6)), // Generate unique Family Code
            ]);

            // Link user to the newly created family
            $user->update(['family_id' => $family->id]);

            // Create membership record
            FamilyMembership::create([
                'family_id' => $family->id,
                'user_id' => $user->id,
                'role' => 'family_admin',
                'join_date' => now(),
            ]);
        }

        // Trigger the registered event and log in the user
        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
