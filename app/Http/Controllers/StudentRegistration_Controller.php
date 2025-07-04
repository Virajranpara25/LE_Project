<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch_Data;
use Illuminate\Support\Facades\Hash;
use App\Models\Student_Data;

class StudentRegistration_Controller extends Controller
{
    public function student_registration(Request $request)  
    {
         if ($request->isMethod("get")) 
        {
            $branches = Branch_Data::all();  // Fetch all branches
            return view('Login_Registers.student_register', compact('branches'));
        }

        if ($request->isMethod("post")) {
            // dd($request->all());
            $validated = $request->validate([
                'enroll_no' => 'required|digits:12|unique:student_details,Stu_Enrollment_NO',
                'name' => 'required|regex:/^[a-zA-Z\s]+$/u',
                'mobile' => 'required|digits:10',
                'parents_mobile' => 'required|digits:10',
                'email' => 'required|email|unique:student_details,Stu_emailid',
                'gender' => 'required',
                'semester' => 'required|integer',
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
                'branch' => 'required',
            ], [
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters.',
                'password.regex' => 'Password must include at least one uppercase, one lowercase, one number, and one special character.',
                'password.confirmed' => 'Password confirmation does not match.',
                'password_confirmation.required' => 'Confirm Password field is required.',
                'mobile.digits' => 'Mobile number must be exactly 10 digits.',
                'parents_mobile.digits' => 'Parents mobile number must be exactly 10 digits.',
                'name.regex' => 'Name must contain only alphabets and spaces.',
            ]);
            // echo "hellodccw";
            

            // Save or do something with $validated data here...
            $filename = null;
            if ($request->hasFile('profile_image')) {
                $filename = time() . '.' . $request->file('profile_image')->getClientOriginalExtension();
                $request->file('profile_image')->move(public_path('profile_images'), $filename);
            }
        


            try {
                Student_Data::create([
                    'Stu_Enrollment_NO' => $validated['enroll_no'],
                    'Stu_name' => $validated['name'],
                    'Stu_Phone_No' => $validated['mobile'],
                    'Stu_Parents_Phone_No' => $validated['parents_mobile'],
                    'Stu_emailid' => $validated['email'],
                    'Stu_gender' => $validated['gender'],
                    'Stu_sem' => $validated['semester'],
                    'Stu_password' => Hash::make($validated['password']),
                    'Stu_state' => $validated['state'],
                    'Stu_city' => $validated['city'],
                    'Stu_current_add' => $validated['current_address'],
                    'Stu_permanent_add' => $validated['permanent_address'],
                    'Stu_image' => $filename,
                    'Br_id' => $validated['branch'],
                ]);

            
                return redirect()->back()->with('success', 'Student registered successfully.');

                dd(session()->all());
            } catch (\Exception $e) {
                return back()->with('error', 'Failed to register student: ' . $e->getMessage());
            }
            

        }
    }



}
