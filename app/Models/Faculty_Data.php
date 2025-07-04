<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faculty_Data extends Authenticatable
{
    protected $table = 'faculty_details';

    protected $primaryKey = 'F_id';

    protected $fillable = [
        'F_name', 'F_emailid', 'F_gender', 'F_password',
        'F_state', 'F_city', 'F_mobile_no', 'F_address1',
        'F_address2', 'F_image', 'Br_id', 'F_id',
    ];
     public $timestamps = false; // Set to true if using created_at, updated_at

}