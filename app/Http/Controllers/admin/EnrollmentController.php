<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Task;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('admin.pages.enrolls.index',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tasks = Task::all();
        return view('admin.pages.enrolls.create', compact('users', 'tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enroll = $request->validate([
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
        ]);

        Enrollment::create($enroll);

        return redirect()->route('admin.enrollment.index')->with('success', 'Enrollment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('admin.pages.enrolls.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $users = User::all();
        $tasks = Task::all();
        return view('admin.pages.enrolls.edit', compact('enrollment', 'users', 'tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollment = Enrollment::findOrFail($id);

        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
        ]);

        $enrollment->update($data);

        return redirect()->route('admin.enrollment.index')->with('success', 'Enrollment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();

        return redirect()->route('admin.enrollment.index')->with('success', 'Enrollment deleted successfully.');
    }
}
