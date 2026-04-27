<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoothSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_code',
        'template_id',
        'status',
        'filter',
        'started_at',
        'expired_at',

    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function printJob()
    {
        return $this->hasOne(PrintJob::class);
    }
}
