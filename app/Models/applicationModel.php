<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'contact',
        'birthday',
        'gender',
        'plan',
        'email',
        'street',
        'barangay',
        'town',
        'province',
        'landmark',
        'uploadid',
        'idselfie'
     
        

    ];
}
