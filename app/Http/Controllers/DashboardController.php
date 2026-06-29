<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Wish;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGuests = Guest::count();
        $totalHadir = Guest::where('attendance', 'hadir')->count();
        $totalTidakHadir = Guest::where('attendance', 'tidak_hadir')->count();
        $totalRagu = Guest::where('attendance', 'ragu')->count();
        $totalTamuHadir = Guest::where('attendance', 'hadir')->sum('total_guest');

        $guests = Guest::latest()->get();
        $wishes = Wish::latest()->get();

        return view('dashboard', compact(
            'totalGuests',
            'totalHadir',
            'totalTidakHadir',
            'totalRagu',
            'totalTamuHadir',
            'guests',
            'wishes'
        ));
    }
}
