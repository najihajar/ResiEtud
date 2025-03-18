<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
{
    $announcements = Announcement::all();
    return view('admin.announcements', compact('announcements'));
}

public function create()
{
    return view('admin.create_announcement');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
    ]);

    Announcement::create([
        'title' => $request->title,
        'description' => $request->description,
        'created_by' => auth()->id(),
    ]);

    return redirect()->route('admin.announcements.index');
}

public function destroy(Announcement $announcement)
{
    $announcement->delete();
    return redirect()->route('admin.announcements.index');
}

}
