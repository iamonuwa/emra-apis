<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model
{
    protected $fillable = [
        'mail_key', 'title', 'content', 'cc', 'bcc', 'attachments'
    ];
}

