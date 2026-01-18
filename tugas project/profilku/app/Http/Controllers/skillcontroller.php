<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class skillcontroller extends Controller
{
    public function index()
    {
        $skills = skill::all();
        return view('skills.index', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        skill::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Skill added successfully!');
    }
    public function destroy($id)
    {
        $skill = skill::findOrFail($id);
        $skill->delete();
        return redirect()->back()->withkill('success', 'Skill deleted successfully!');
    }
}
