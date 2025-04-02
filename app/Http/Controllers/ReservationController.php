<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

public function store(Request $request)
{
    $request->validate([
        'restaurant_id' => 'required|exists:restaurants,id',
        'date' => 'required|date',
        'time' => 'required',
        'guest_count' => 'required|integer',
    ]);

    $reservation = Reservation::create([
        'user_id' => auth()->id(),
        'restaurant_id' => $request->restaurant_id,
        'date' => $request->date,
        'time' => $request->time,
        'guest_count' => $request->guest_count,
    ]);

    return response()->json(['message' => 'Reservation successful', 'reservation' => $reservation]);
}
