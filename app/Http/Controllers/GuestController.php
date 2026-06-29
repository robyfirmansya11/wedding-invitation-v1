<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'attendance' => 'required|in:hadir,tidak_hadir,ragu',
            'total_guest' => 'required|integer|min:1|max:10',
        ]);

        Guest::create($validated);

        return back()->with('success', 'Terima kasih, konfirmasi kehadiran kamu sudah kami terima!');
    }
}
