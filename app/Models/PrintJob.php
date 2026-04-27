<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'booth_session_id',
        'status',
        'copies',
        'printed_at'



    ];


    public function boothSession()
    {
        return $this->belongsTo(BoothSession::class);
    }
}
