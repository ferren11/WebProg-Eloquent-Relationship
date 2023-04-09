<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMembership extends Model
{
    use HasFactory;

    const MEMBERSHIP_TYPE_STANDARD = 'Standard';
    const MEMBERSHIP_TYPE_VIP = 'VIP';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
