<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'booth_session_id',
        'file_path',
        'order'
    ];


    public function BoothSession()
    {
        return $this->belongsTo(BoothSession::class);
    }
}
