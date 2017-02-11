<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail_has_comments extends Model
{
    protected $fillable = [
    	'author', 'receipient', 'mail', 'comment'
    ];
}

