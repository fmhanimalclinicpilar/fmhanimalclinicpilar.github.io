<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PetController extends Controller
{
    public function index(Request $request): View
    {
        return view('mypets', ['pets' => $request->user()->pets()->latest()->get()]);
    }

    public function create(): View
    {
        return view('addpet');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'petname' => ['required', 'string', 'max:255'],
            'species' => ['required', 'string', 'max:255'],
            'breed' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:0', 'max:50'],
            'notes' => ['nullable', 'string'],
        ]);

        $data['name'] = $data['petname'];
        unset($data['petname']);
        $request->user()->pets()->create($data);

        return redirect()->route('pets.index')->with('status', 'pet-created');
    }
}
