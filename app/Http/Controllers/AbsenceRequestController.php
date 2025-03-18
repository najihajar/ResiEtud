<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceRequestController extends Controller
{
    public function index()
{
    $requests = AbsenceRequest::all();
    return view('admin.absence_requests', compact('requests'));
}

public function store(Request $request)
{
    $request->validate([
        'absence_date' => 'required|date',
    ]);

    AbsenceRequest::create([
        'student_id' => auth()->id(),
        'absence_date' => $request->absence_date,
    ]);

    return redirect()->route('user.absence_form');
}

public function approve($id)
{
    $request = AbsenceRequest::findOrFail($id);
    $request->status = 'approved';
    $request->save();
    return redirect()->route('admin.absence_requests.index');
}

public function reject($id)
{
    $request = AbsenceRequest::findOrFail($id);
    $request->status = 'rejected';
    $request->save();
    return redirect()->route('admin.absence_requests.index');
}

}
