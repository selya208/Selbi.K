<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;

public function index()
{
    return Restaurant::with('city')->get();
}
