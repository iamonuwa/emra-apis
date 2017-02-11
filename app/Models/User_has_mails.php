<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_has_mails extends Model
{
    protected $fillable = [
    	'author', 'receipient', 'parent', 'mail'
    ];
}
