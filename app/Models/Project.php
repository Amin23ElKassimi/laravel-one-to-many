<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'view',
        'start_date',
        'end_date',
        'client_id',
        'budget',
        'priority',
    ];
}
