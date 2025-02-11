<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

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
            'completedTasks' => $completedTasks
        ];


        return view('index', compact('tasksData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'status' => 'required|in:pendiente,en proceso,completada'
        ]);


        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status
        ]);


        return redirect()->route('index')->with('success', 'Tarea creada correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
