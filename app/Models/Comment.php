<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'event_attendance_id',
        'comment'
    ];

    public function attendance() {
        return $this->belongsTo(EventAttendance::class);
    }
}
