<?php

namespace App\Http\Controllers;

use App\Models\Branch_Data;
use Illuminate\Http\Request;
use App\Models\HOD_Data;
use Illuminate\Support\Facades\Hash;


class HODRegistration_Controller extends Controller
{
    public function HOD_registration(Request $request)
    {
        if ($request->isMethod("get")) 
        {
            $branches = Branch_Data::all();  // Fetch all branches
            return view('Login_Registers.HOD_register', compact('branches'));
        }

        if ($request->isMethod("post")) {
            $validated = $request->validate([
                'HOD_id' => 'required|unique:hod_details,HOD_id',
                'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
                'email' => 'required|email|unique:hod_details,HOD_emailid',
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

            echo "hod_id: " . $validated['HOD_id'];
            try {
                HOD_Data::create([
                    'HOD_id' => $validated['HOD_id'],
                    'HOD_name' => $validated['name'],
                    'HOD_emailid' => $validated['email'],
                    'HOD_gender' => $validated['gender'],
                    'HOD_Password' => Hash::make($validated['password']),
                    'HOD_state' => $validated['state'],
                    'HOD_City' => $validated['city'],
                    'HOD_mobile_no' => $validated['phone_no'],
                    'HOD_address1' => $validated['current_address'],
                    'HOD_address2' => $validated['permanent_address'],
                    'HOD_img' => $filename,
                    'Br_id' => $validated['branch'],
                ]);

                return redirect()->back()->with('success', 'HOD registered successfully.');
            } catch (\Exception $e) {
                return back()->with('error', 'Failed to register HOD: ' . $e->getMessage());
            }
        }
    }
}
