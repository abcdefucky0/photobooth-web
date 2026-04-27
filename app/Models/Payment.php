<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booth_session_id',
        'method',
        'user_id',
        'amount',
        'status',
        'paid_at',
    ];

    public function boothSession()
    {
        return $this->belongsTo(BoothSession::class);
    }
}
