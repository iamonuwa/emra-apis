<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = [
        'account_key', 'company_name', 'location', 'city', 'state', 'country', 'account', 'status', 'department', 'verify_code'
    ];
}

