<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_PAYMENT_PENDING = 'Pending';
    const STATUS_PAYMENT_PROCESSED = 'Processed';
    const STATUS_PAYMENT_FINISHED = 'Finished';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
