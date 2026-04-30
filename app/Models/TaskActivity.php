<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskActivity extends Model
{
    protected $table = 'task_activities';

    protected $fillable = [
        'task_id',
        'message',
    ];

    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';

    /**
     * Relationship: Activity belongs to a Task
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}