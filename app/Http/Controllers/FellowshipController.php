<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fellowship;

class FellowshipController extends Controller
{
    public function index()
    {
        return response()->json(Fellowship::all());
    }
}
