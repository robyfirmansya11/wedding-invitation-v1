<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(Request $request)
    {
        $wishes = Wish::latest()->get();
        $guestName = $request->query('to', '');

        return view('invitation', compact('wishes', 'guestName'));
    }
}
