<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function fellowship()
    {
        return $this->belongsTo(Fellowship::class);
    }

    public function attendance() {
        return $this->hasMany(EventAttendance::class);
    }
}
