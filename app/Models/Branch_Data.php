<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch_Data extends Model
{
    protected $table = 'branch_details';
    public $timestamps = false; // Disable auto timestamps

    protected $fillable = [
        'Br_id  ', 'Br_name','Br_code', 'Br_status'];
    
}
?>