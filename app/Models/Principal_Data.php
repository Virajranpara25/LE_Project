<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Principal_Data extends Authenticatable
{
    protected $table = 'principal_details';
    public $timestamps = false; // Disable auto timestamps

    protected $primaryKey = 'Pr_id ';      // ← Important
    public $incrementing = false;          // ← Important
    protected $keyType = 'string';

    protected $fillable = [
        'Pr_id ',
        'Pr_name',
        'Pr_gender',
        'Pr_email_id',
        'Pr_password',
        'Pr_state',
        'Pr_city',
        'Pr_mobile_no',
        'Pr_address1',
        'Pr_address2',
        'Pr_image',
    ];
}
