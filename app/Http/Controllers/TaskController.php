<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;

        $query = Task::query();

        if ($type == 'completed') {
            $query->where('status', 'completed');
        } elseif ($type && $type != 'all') {
            $query->where('task_type', $type);
            $query->where('status', '!=', 'completed');
        }

        $tasks = $query->orderBy('due_date')->get();

        return view('SalesRep.sales_tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'customer_name' => $request->customer_name,
            'task_type' => $request->task_type,
            'priority' => $request->priority,
            'status' => 'pending',
            'due_date' => $request->due_date
        ]);

        return back()->with('success', 'Task Created');
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update([
            'status' => $request->status
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Task updated successfully'
        ]);
    }
}