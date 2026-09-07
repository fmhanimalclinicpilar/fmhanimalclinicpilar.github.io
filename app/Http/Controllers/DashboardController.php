<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user();

        return view('dashboard', [
            'petCount' => $user->pets()->count(),
            'upcomingAppointmentCount' => $user->appointments()
                ->whereDate('appointment_date', '>=', today())
                ->count(),
            'completedAppointmentCount' => $user->appointments()
                ->where('status', 'completed')
                ->count(),
        ]);
    }
}
