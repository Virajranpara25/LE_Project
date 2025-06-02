<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Student_Data;

class StudentRegistration_Controller extends Controller
{
    public function student_registration(Request $request)  
    {
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


    public function login(Request $request)  
    {
        if ($request->isMethod("post")) {
            $validated = $request->validate([
                'user_role' => 'required',
                'enrollment_number' => 'required|digits:12',
                'password' => 'required',
            ]);
    
            if ($validated['user_role'] == 'student') {
                $student = Student_Data::where('Stu_Enrollment_NO', $validated['enrollment_number'])->first();
    
                if ($student && Hash::check($validated['password'], $student->Stu_password)) {
                    // ✅ Credentials are valid
                    session(['student' => $student]); // store in session
                    return redirect()->route('index')->with('success', 'Login successful!');
                } else {
                    // ❌ Invalid credentials
                    return back()->with('error', 'Invalid enrollment number or password.');
                }
            }
    
            // 👉 You can add more roles like 'admin', 'teacher', etc. here
            return back()->with('error', 'Invalid user role.');
        }
    }


    public function verify_email(Request $request)  
    {
        if ($request->isMethod("post")) {
            $validated = $request->validate([
                'email' => 'required|email',
            ]);
    
            // Check if the email exists in the database
            $student = Student_Data::where('Stu_emailid', $validated['email'])->first();
    
            if ($student) {
                // Email exists, send OTP
                // Generate OTP and send it to the email
                // You can use Laravel's Mail facade to send the OTP
                // For example:
                // Mail::to($validated['email'])->send(new SendOtpMail($otp));
    
                return response()->json(['success' => true, 'message' => 'OTP sent to your email.']);
            } else {
                return response()->json(['success' => false, 'message' => 'Email not found.']);
            }
        }
    }
}
