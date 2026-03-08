<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventAttendance extends Model
{

    protected $fillable = [
        'user_id',
        'event_id',
        'attended'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
