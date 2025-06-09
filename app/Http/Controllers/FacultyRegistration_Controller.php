<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyRegister;
use Illuminate\Support\Facades\Hash;


class FacultyRegistration_Controller extends Controller
{
    public function faculty_registration(Request $request)
    {
        if ($request->isMethod("post")) {
            $validated = $request->validate([
                'faculty_id' => 'required|unique:faculty_details,F_id',
                'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
                'email' => 'required|email|unique:faculty_details,F_emailid',
                'branch' => 'required',
                'gender' => 'required',
                'phone_no' => 'required|digits:10',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/[a-z]/',
                    'regex:/[A-Z]/',
                    'regex:/[0-9]/',
                    'regex:/[@$!%*#?&]/',
                    'confirmed'
                ],
                'password_confirmation' => 'required',
                'state' => 'required',
                'city' => 'required',
                'current_address' => 'required',
                'permanent_address' => 'required',
                'profile_image' => 'required|image|max:2048',
            ], [
                'password.required' => 'Password is required.',
                'name.regex' => 'Name must contain only letters and spaces.',
                'password.regex' => 'Password must include uppercase, lowercase, number, and special character.',
                'password.confirmed' => 'Password confirmation does not match.',
                'password_confirmation.required' => 'Confirm Password field is required.',


            ]);

            $filename = null;
            if ($request->hasFile('profile_image')) {
                $filename = time() . '.' . $request->file('profile_image')->getClientOriginalExtension();
                $request->file('profile_image')->move(public_path('profile_image'), $filename);
            }

            try {
                FacultyRegister::create([
                    'F_id' => $validated['faculty_id'],
                    'F_name' => $validated['name'],
                    'F_emailid' => $validated['email'],
                    'Br_id' => $validated['branch'],
                    'F_gender' => $validated['gender'],
                    'F_state' => $validated['state'],
                    'F_city' => $validated['city'],
                    'F_mobile_no' => $validated['phone_no'],
                    'F_password' => Hash::make($validated['password']),
                    'F_address1' => $validated['current_address'],
                    'F_address2' => $validated['permanent_address'],
                    'F_image' => $filename,
                ]);

                return redirect()->back()->with('success', 'Faculty registered successfully.');
            } catch (\Exception $e) {
                return back()->with('error', 'Failed to register faculty: ' . $e->getMessage());
            }
        }
    }
}
