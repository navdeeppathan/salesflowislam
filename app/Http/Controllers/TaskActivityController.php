<?php

namespace App\Http\Controllers;

use App\Models\TaskActivity;
use Illuminate\Http\Request;

class TaskActivityController extends Controller
{
    public function index($taskId)
    {
        return TaskActivity::where('task_id', $taskId)
            ->latest()
            ->get();
    }

    public function store(Request $request, $taskId)
    {
        $activity = TaskActivity::create([
            'task_id' => $taskId,
            'message' => $request->message,
        ]);

        return response()->json($activity);
    }
}
