<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $userid = Auth::user()->id;

        $input = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string|max:255',
        ]);

        Appointment::create([
            'name' => $input['name'],
            'course' => $input['course'],
            'mode' => $input['mode'],
            'gender' => $input['gender'],
            'date' => $input['date'],
            'time' => $input['time'],
            "user_id" => $userid
        ]);

        return redirect('dashboard')->with('status', 'Appointment created successfully! You may now check the status of your appointment.');
    }
}
