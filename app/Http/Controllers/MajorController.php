<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }

    public function show(string $id)
    {
        $major = Majors::with('students')->findOrFail($id);
        return view('majors.show', compact('major'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:majors,code',
            'description' => 'required|string',
        ]);

        Majors::create([
            'name' => $validated['name'],
            'code' => $validated['code'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('majors.index')->with('success', 'Major created successfully');
    }

    public function edit(string $id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:majors,code,' . $id,
            'description' => 'required|string',
        ]);

        $major = Majors::findOrFail($id);
        $major->update([
            'name' => $validated['name'],
            'code' => $validated['code'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('majors.index')->with('success', 'Major updated successfully');
    }

    public function destroy(string $id)
    {
        $major = Majors::findOrFail($id);
        $major->delete();

        return redirect()->route('majors.index')->with('success', 'Major deleted successfully');
    }
}
