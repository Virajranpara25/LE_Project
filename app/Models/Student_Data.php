<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Data extends Model
{
    protected $table = 'student_details';
    public $timestamps = false; // Disable auto timestamps

    protected $fillable = [
        'Stu_Enrollment_NO', 'Stu_name','Stu_Phone_No', 'Stu_Parents_Phone_No',
         'Stu_emailid',  'Stu_gender','Stu_sem','Stu_password',
          'Stu_state', 'Stu_city',
         'Stu_current_add', 'Stu_permanent_add', 'Stu_image','Br_id'
    ];
    
}
