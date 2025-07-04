<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
class HOD_Data extends Authenticatable
{
    protected $table = 'hod_details';
    public $timestamps = false; // Disable auto timestamps

    protected $primaryKey = 'HOD_id';      // ← Important
    public $incrementing = false;          // ← Important
    protected $keyType = 'string';

    protected $fillable = [
        'HOD_id',
        'HOD_name',
        'HOD_emailid',
        'HOD_gender',
        'HOD_Password',
        'HOD_state',
        'HOD_City',
        'HOD_mobile_no',
        'HOD_address1',
        'HOD_address2',
        'HOD_img',
        'Br_id'
    ];
}
