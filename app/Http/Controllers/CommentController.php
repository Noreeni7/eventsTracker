<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'event_attendance_id' => 'required|exists:event_attendances,id',
            'comment' => 'required|string'
        ]);

        $comment = Comment::create([
            'event_attendance_id' => $request->event_attendance_id,
            'comment' => $request->comment
        ]);

        return response()->json([
            'message' => 'Comment added successfully',
            'comment' => $comment
        ]);
    }

    public function index() {
        $comment = Comment::with('attendance')->get();
        return response()->json($comment);
    }
}
