<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyHabit;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
public function index()
{
    $userId = Auth::id();
    $today = now()->toDateString();

    $undoneHabits = DailyHabit::where('user_id', $userId)
                        ->where('date', $today)
                        ->where('done', false)
                        ->get();

    $doneHabits = DailyHabit::where('user_id', $userId)
                        ->where('date', $today)
                        ->where('done', true)
                        ->get();

    return view('habits', compact('undoneHabits', 'doneHabits'));
}


}
