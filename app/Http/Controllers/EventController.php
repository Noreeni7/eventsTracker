<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Http\Resources\EventResource;

class EventController extends Controller
{
    public function index() {
        $events = Event::with('fellowship')->get();

        return EventResource::collection($events);
    }
}
