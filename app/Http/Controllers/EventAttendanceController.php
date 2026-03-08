<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EventAttendance;

class EventAttendanceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
            'attended' => 'required|boolean'
        ]);

        $attendance = EventAttendance::updateOrCreate(
            [
                'user_id' => $request->user_id,
                'event_id' => $request->event_id
            ],
            [
                'attended' => $request->attended
            ]
        );

        return response()->json($attendance);
    }

    public function index() {
        $attendance = EventAttendance::with(['user', 'event'])->get();
        return response()->json($attendance);
    }
}
