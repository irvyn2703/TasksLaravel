<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        $groupedTasks = $tasks->groupBy('status');

        $pendingTasks = $groupedTasks->get('pendiente', collect());
        $inProgressTasks = $groupedTasks->get('en proceso', collect());
        $completedTasks = $groupedTasks->get('completada', collect());

        $tasksData = [
            'pendingTasks' => $pendingTasks,
            'inProgressTasks' => $inProgressTasks,
            'completedTasks' => $completedTasks,
        ];

        return view('index', compact('tasksData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required',
            'due_date' => 'nullable|date',
            'status' => 'required|in:pendiente,en proceso,completada',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:pendiente,en proceso,completada',
        ]);

        $task->update([
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
