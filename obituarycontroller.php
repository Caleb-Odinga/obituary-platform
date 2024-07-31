<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obituary;

class ObituaryController extends Controller
{
    public function submitObituary(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'dod' => 'required|date',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        try {
            Obituary::create([
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'dod' => $request->input('dod'),
                'content' => $request->input('content'),
                'author' => $request->input('author'),
            ]);

            return redirect('/submit-obituary')->with('success', 'Obituary submitted successfully.');
        } catch (\Exception $e) {
            return redirect('/submit-obituary')->with('error', 'An error occurred while submitting the obituary. Please try again.');
        }
    }



public function viewObituaries()
{
    $obituaries = Obituary::all();

    return view('view_obituaries', compact('obituaries'));
}

}