<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'project_id',
        'user_id',
        'date',
        'start_time',
        'end_time',
        'time_spent',
        'status',
        'notes',
        'link'
        
    ];
}
