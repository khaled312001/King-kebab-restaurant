<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'person' => 'required|integer|min:1|max:10',
            'reservation_date' => 'required|date|after_or_equal:today',
            'reservation_time' => 'required|string',
            'message' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Reservation::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'person' => $request->person,
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time,
                'message' => $request->message,
                'status' => 'pending'
            ]);

            return redirect()->back()->with('success', 'Votre réservation a été envoyée avec succès ! Nous vous contacterons bientôt pour confirmer.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Une erreur est survenue. Veuillez réessayer.'])
                ->withInput();
        }
    }
} 