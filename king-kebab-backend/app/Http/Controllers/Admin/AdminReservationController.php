<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->paginate(15);
        return view('admin.reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required|string',
            'guests' => 'required|integer|min:1|max:20',
            'message' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,cancelled,completed',
        ]);

        $reservation->update($request->all());

        return redirect()->route('admin.reservations.index')->with('success', 'تم تحديث الحجز بنجاح');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('admin.reservations.index')->with('success', 'تم حذف الحجز بنجاح');
    }

    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled,completed'
        ]);

        $reservation->update(['status' => $request->status]);

        return response()->json([
            'success' => true,
            'message' => 'تم تحديث حالة الحجز بنجاح'
        ]);
    }
} 