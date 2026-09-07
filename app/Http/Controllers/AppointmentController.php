<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(Request $request): View
    {
        return view('history', [
            'appointments' => $request->user()->appointments()->with('pet')->latest('appointment_date')->get(),
        ]);
    }

    public function create(Request $request): View
    {
        return view('appointment', ['pets' => $request->user()->pets()->orderBy('name')->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'petname' => ['required', 'string', 'max:255'],
            'species' => ['required', 'string', 'max:255'],
            'breed' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:0', 'max:50'],
            'service' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required', 'date_format:H:i'],
            'notes' => ['nullable', 'string'],
        ]);

        $pet = $request->user()->pets()->firstOrCreate(
            ['name' => $data['petname']],
            [
                'species' => $data['species'],
                'breed' => $data['breed'],
                'sex' => $data['sex'],
                'age' => $data['age'],
            ],
        );

        Appointment::create([
            'user_id' => $request->user()->id,
            'pet_id' => $pet->id,
            'service' => $data['service'],
            'appointment_date' => $data['date'],
            'appointment_time' => $data['time'],
            'notes' => $data['notes'] ?? null,
        ]);

        return redirect()->route('appointments.index')->with('status', 'appointment-created');
    }
}
